<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual Editor</title>
    <link rel="stylesheet" href="editor.css">
</head>
<body>
    <div id="editor-toolbar">
        <div class="draggable" draggable="true" data-type="h1">Heading</div>
        <div class="draggable" draggable="true" data-type="p">Paragraph</div>
        <div class="draggable" draggable="true" data-type="button">Button</div>
    </div>
    <div id="editor-canvas"></div>
    <script src="editor.js"></script>
</body>
</html>
