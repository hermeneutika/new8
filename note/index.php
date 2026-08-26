<?php
// Database connection
$host = 'localhost';
$user = 'michael';
$password = 'A7ndromeda!1';
$dbname = 'note_taking_app';
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$tableCheckQuery = "
CREATE TABLE IF NOT EXISTS notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
";
$conn->query($tableCheckQuery);

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $noteId = $_POST['note_id'] ?? null;
    $content = $_POST['content'] ?? '';

    if ($action === 'save') {
        if ($noteId) {
            // Update existing note
            $stmt = $conn->prepare("UPDATE notes SET content = ? WHERE id = ?");
            $stmt->bind_param('si', $content, $noteId);
        } else {
            // Create new note
            $stmt = $conn->prepare("INSERT INTO notes (content) VALUES (?)");
            $stmt->bind_param('s', $content);
        }
        $stmt->execute();
        echo $noteId ?: $conn->insert_id;
        exit;
    }

    if ($action === 'fetch') {
        $result = $conn->query("SELECT * FROM notes ORDER BY id DESC");
        $notes = [];
        while ($row = $result->fetch_assoc()) {
            $notes[] = $row;
        }
        echo json_encode($notes);
        exit;
    }
	if ($action === 'delete') {
        if ($noteId) {
            $stmt = $conn->prepare("DELETE FROM notes WHERE id = ?");
            $stmt->bind_param('i', $noteId);
            $stmt->execute();
            echo "success";
        } else {
            echo "error";
        }
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Taking App</title>
    <script src="tinymce/tinymce.min.js" referrerpolicy="origin"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <script>
        tinymce.init({ selector: '#editor' });

        document.addEventListener('DOMContentLoaded', function () {
            fetchNotes();

            document.getElementById('save-note').addEventListener('click', function () {
                const noteId = document.getElementById('note-id').value;
                const content = tinymce.get('editor').getContent();
                saveNote(noteId, content);
            });

            document.getElementById('new-note').addEventListener('click', function () {
                document.getElementById('note-id').value = '';
                tinymce.get('editor').setContent('');
            });
        });

        function fetchNotes() {
            fetch('index.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ action: 'fetch' })
            })
            .then(response => response.json())
            .then(notes => {
                const container = document.getElementById('notes-container');
                container.innerHTML = '';
                notes.forEach(note => {
                    const div = document.createElement('div');
                    div.classList.add('note');
                    div.classList.add('bg-body-tertiary');
                    div.innerHTML = `<div class="note-content">${note.content}</div>
                        <button class="btn btn-secondary rounded-pill px-3" onclick="editNote(${note.id}, \`${note.content}\`)"> Edit</button>
						 <button class="btn btn-danger rounded-pill px-3" onclick="deleteNote(${note.id})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg> Delete</button>
                    `;
                    container.appendChild(div);
                });
            });
        }

        function saveNote(noteId, content) {
            fetch('index.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({ action: 'save', note_id: noteId, content })
            })
            .then(response => response.text())
            .then(() => {
                fetchNotes();
                document.getElementById('new-note').click();
            });
        }
		 function deleteNote(noteId) {
            if (confirm('Are you sure you want to delete this note?')) {
                fetch('index.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({ action: 'delete', note_id: noteId })
                })
                .then(response => response.text())
                .then(result => {
                    if (result === 'success') {
                        fetchNotes();
                    } else {
                        alert('Error deleting note');
                    }
                });
            }
        }

        function editNote(id, content) {
            document.getElementById('note-id').value = id;
            tinymce.get('editor').setContent(content);
        }
    </script>
    <style>
        .note { margin-bottom: 10px; padding: 10px; border: 1px solid #ccc; }
        .note-content { margin-bottom: 5px; }
		button svg {padding-bottom: 2px;}
    </style>
</head>
<body>
<div class="container my-5">
    <h1>Note Taking App</h1>
    <textarea id="editor"></textarea>
    <input type="hidden" id="note-id">
	</br>
    <button class="btn btn-primary rounded-pill px-3" id="save-note"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2" viewBox="0 0 16 16"><path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/></svg> Save Note</button>
    <button class="btn btn-dark rounded-pill px-3" id="new-note"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/></svg> New Note</button>
</br>
    <h2>Your Notes</h2>
    <div id="notes-container"></div>
	
	
	
	
	Your Company &copy; <?php echo date("Y"); ?> <a href="https://www.insertcart.com/build-a-simple-php-note-taking-app-with-ajax/">InsertCart Notes</a>
	</div>
	
	
	
</body>
</html>
