<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $index_content = file_get_contents('/pawns_of_hawaii/index.php');

  // Get current Title
  preg_match('/id="title-whyadopt">(.*?)</', $index_content, $title_matches);
  $current_title = $title_matches[1];

  // Get current Content
  preg_match_all('/<p>(.*?)</', $index_content, $content_matches);
  $current_content = implode('', $content_matches[1]);
}

//Getting new Values from the Form
$title = $_POST['title'];
$content = $_POST['content'];

// Chang Values and updating the page.
$index_content = str_replace('id="title-whyadopt">' . $current_title, 'id="title-whyadopt">' . $title, $index_content);
$index_content = str_replace('<p>' . $current_content . '</p>', '<p>' . $content . '</p>', $index_content);
header('Location: /pawns_of_hawaii/index.php');
?>