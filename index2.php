<?php

session_start();

// Check if the notes array exists in the session, initialize it if not
if (!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = [];
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the note text from the POST data
    $newNoteText = $_POST['noteText'];

    // Add the new note to the session array
    $_SESSION['notes'][] = $newNoteText;
}
