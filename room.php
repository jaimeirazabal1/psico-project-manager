<!DOCTYPE html>
<html>
  <head>
    <script src='https://8x8.vc/external_api.js' async></script>
    <style>html, body, #jaas-container { width: 100%;height:100% }</style>
    <script type="text/javascript">
      window.onload = () => {
        const api = new JitsiMeetExternalAPI("8x8.vc", {
          roomName: "vpaas-magic-cookie-96f8e8f1da6b444b8713ddadc08f0639/SampleAppMarginalPeacesIronIn",
          parentNode: document.querySelector('#jaas-container')
        });
      }
    </script>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  </head>
  <body class="container">
    <?php require_once('menu.php') ?>
    <h1>Aqui puedo poner un titulo</h1>
    <div id="jaas-container"></div>
  </body>
</html>