<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="systemcss/">

    <style>
        /* Your custom styles here */
    </style>
</head>
<body>
   <input type="text" id="qr-input" placeholder="Enter URL">
<button id="generate">Generate QR</button>
<br><br>
<img id="qr-code" src="" alt="QR Code">
<br>
<a id="download" href="#" download="qr-code.png" style="display:none;">Download QR</a>

<script>
const input = document.getElementById('qr-input');
const button = document.getElementById('generate');
const qrImg = document.getElementById('qr-code');
const downloadLink = document.getElementById('download');

button.addEventListener('click', () => {
  if (!input.value) {
    alert("Please enter a URL!");
    return;
  }

  const url = encodeURIComponent(input.value);
  const qrSrc = `https://api.qrserver.com/v1/create-qr-code/?data=${url}&size=150x150`;
  
  qrImg.src = qrSrc;

  // Show download link
  downloadLink.href = qrSrc;
  downloadLink.style.display = 'inline-block';
});
</script>


    <!-- Script files at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>