<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Facture</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="logoName">L&S HOTEL</h2>
        <div>20 Rue du Luxembourg, <BR>59100 Roubaix</div>
        <div>03.01.02.03.04</div>
        <div><a href="mailto:lshotel@hotmail.com">lshotel@hotmail.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Client:</div>
          <h2 class="name">John Doe</h2>
          <div class="address">796 Silver Harbour, TX 79273, US</div>
          <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
        </div>
        <div id="invoice">
          <h1>Facture n°</h1>
          <div class="date">Date de la réservation: 01/06/2014</div>
          <div class="date">Du: 30/06/2020 au 02/07/2020</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="date">DATE</th>
            <th class="desc">DESCRIPTION</th>
            <th class="option">OPTION</th>
            <th class="unit">Prix</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="DATE">01/02/2020</td>
            <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="option">Option blabla</td>
            <td class="unit">$40.00</td>
            <td class="total">$1,200.00</td>
          </tr>
         
        </tbody>
        <tfoot class="text-center">
          <tr> 
              
              <td></td>
            <td colspan="4">SOUS-TOTAL :</td>
            <td>$5,200.00</td>
        

          </tr>
          <tr>
            <td style="border-right: 1px solid #082d41;" colspan="5">TAXES 25% :</td>
            <td >$1,300.00</td>

          </tr>
          <tr>
            <td style="border-right: 1px solid #082d41;" colspan="5">TOTAL :</td>
            <td>$6,500.00</td>

          </tr>
         
        </tfoot>
      </table>
      <br><br>
      <div id="thanks">Merci pour votre fidélité !</div>
    
    </main>
    
  </body>
  <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <a href="#"><i id="social-fb" class="fa fa-facebook-official fa-1x"></i></a>
                <a href="#"><i id="social-tw" class="fa fa-twitter"></i></a>
                <a href="#"><i id="social-gp" class="fa fa-google"></i></a>
                <a href="#"><i id="social-em" class="fa fa-envelope"></i></a>
                <hr>
                <p>L&S HOTEL et SPA © <?php echo date('Y');?> All rights reserved.</p>
                <p>Created with <a href="#"><i id="social-he" class="fa fa-heart"></i></a> by <a href="#">Lara & Samira</a></p>
              </div>
            </div>
          </div>
        </div>
    </footer>
</html>