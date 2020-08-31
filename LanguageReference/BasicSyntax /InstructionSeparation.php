<!-- default -->
<?php
    echo 'This is a test';
?>

<!-- closing tag implies semicolon -->
<?php echo 'This is a test' ?>

<!-- omit closing tag when the end of file -->
<?php echo 'We omitted the last closing tag';
echo 'New line';

// omit closing tag at the end of file, it is helpful, to avoid unwanted whitespace occur at the end of file