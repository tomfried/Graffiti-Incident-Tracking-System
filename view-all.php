<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8"></meta>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">
      <link href="assets/css/styles.css" rel="stylesheet"></link>
      <script src="assets/javascript/javascript.js"></script>
      <?php
        include 'connect.php';
        include 'function.php';
        if(!loggedin) {
          header('location: index.php');
        }
      ?>
    </head>
    <body>
      <div id="header">
        <div class="logo">
          <a href="home.php" title="Home">
            <img src="assets/images/header-logo.png" alt="Logo Banner" />
          </a>
        </div>
        <div class="menu-bar">
          <a class="logout" href="index.php" onclick="session_destory()"        title="Sign Out">Sign Out</a>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">            
              <?php
                  if(loggedin){
                      echo getuser();
                  }
              ?>
            </button>
            <div id="myDropdown" class="dropdown-content">
              <a href="userportal.php" title="User Portal">User Portal</a>
              <a href="accountinfo.php" title="Account Info">Account Info</a>
            </div>
          </div>
        </div>
        <div class="page" id="all-incidents">
          <h1>All Incidents</h1>
          <table id="tablenote" class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Submitter</th>
                    <th>Crew ID</th>
                    <th>Supervisor's Name</th>
                    <th>City</th>
                    <th>Zipcode</th>
                    <th>Date Found</th>
                    <th>Clean Up</th>
                    <th>Moniker</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ryan Troy</td>
                    <td>5421</td>
                    <td>John Stowe</td>
                    <td>Chula Vista</td>
                    <td>92115</td>
                    <td>2011/04/25</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Garrett Baron</td>
                    <td>8422</td>
                    <td>John Stowe</td>
                    <td>La Mesa</td>
                    <td>92115</td>
                    <td>2011/07/25</td>
                    <td>Extensive</td>
                    <td>Bloodz</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ashton Koucherman</td>
                    <td>1562</td>
                    <td>John Stowe</td>
                    <td>San Diego</td>
                    <td>92115</td>
                    <td>2009/01/12</td>
                    <td>Minor</td>
                    <td>TCP</td>
                    <td><a href=#>5</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cedric La Mare</td>
                    <td>6224</td>
                    <td>Sharon Stone</td>
                    <td>La Jolla</td>
                    <td>92101</td>
                    <td>2012/03/29</td>
                    <td>Minor</td>
                    <td>LA Kings</td>
                    <td><a href=#>10</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Airi Pawnie</td>
                    <td>5407</td>
                    <td>Sharon Stone</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2008/11/28</td>
                    <td>Major</td>
                    <td>Swag</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Brielle Mochentash</td>
                    <td>4804</td>
                    <td>Kylie Mino</td>
                    <td>Pacific Beach</td>
                    <td>92101</td>
                    <td>2012/12/02</td>
                    <td>Major</td>
                    <td>ABC</td>
                    <td><a href=#>9</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Herrod Pudoonga</td>
                    <td>9608</td>
                    <td>John Stowe</td>
                    <td>Bonita</td>
                    <td>92101</td>
                    <td>2012/08/06</td>
                    <td>Normal</td>
                    <td>Trump</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Rhona Drake</td>
                    <td>6200</td>
                    <td>John Stowe</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2010/10/14</td>
                    <td>Monolithic</td>
                    <td>Hillary</td>
                    <td><a href=#>2</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Colleen Green</td>
                    <td>2360</td>
                    <td>George Roberts</td>
                    <td>Claremont</td>
                    <td>92115</td>
                    <td>2009/09/15</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>3</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Sonya Green</td>
                    <td>1667</td>
                    <td>George Roberts</td>
                    <td>Santee</td>
                    <td>92037</td>
                    <td>2008/12/13</td>
                    <td>Major</td>
                    <td>Cribz</td>
                    <td><a href=#>8</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Jena Rodman</td>
                    <td>3814</td>
                    <td>John Stowe</td>
                    <td>La Jolla</td>
                    <td>92037</td>
                    <td>2008/12/19</td>
                    <td>Major</td>
                    <td>Cribz</td>
                    <td><a href=#>6</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Quinn Burgess</td>
                    <td>9497</td>
                    <td>Sharon Stone</td>
                    <td>La Mesa</td>
                    <td>92115</td>
                    <td>2013/03/03</td>
                    <td>Normal</td>
                    <td>Bloods</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Charde Ontable</td>
                    <td>6741</td>
                    <td>Sharon Stone</td>
                    <td>San Diego</td>
                    <td>92115</td>
                    <td>2008/10/16</td>
                    <td>Normal</td>
                    <td>La Familia</td>
                    <td><a href=#>3</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Haley Green</td>
                    <td>3597</td>
                    <td>Rihanna Jenson</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2012/12/18</td>
                    <td>Normal</td>
                    <td>Black Hand</td>
                    <td><a href=#>4</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Bradley Couple</td>
                    <td>2558</td>
                    <td>Rihanna Jenson</td>
                    <td>City Heights</td>
                    <td>92101</td>
                    <td>2012/10/13</td>
                    <td>Monolithic</td>
                    <td>LA Kings</td>
                    <td><a href=#>7</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Dai Navah</td>
                    <td>2290</td>
                    <td>Rihanna Jenson</td>
                    <td>City Heights</td>
                    <td>92101</td>
                    <td>2012/09/26</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>5</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Jenette Purdue</td>
                    <td>1937</td>
                    <td>Amy Jinsen</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2011/09/03</td>
                    <td>Major</td>
                    <td>MNP</td>
                    <td><a href=#>8</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Yuri Gorbachev</td>
                    <td>6154</td>
                    <td>Amy Jinsen</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2009/06/25</td>
                    <td>Minor</td>
                    <td>Santa</td>
                    <td><a href=#>5</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Brenden Love</td>
                    <td>1314</td>
                    <td>Sharon Stone</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2011/06/07</td>
                    <td>Extensive</td>
                    <td>Bernie</td>
                    <td><a href=#>6</a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Fiona Shrek</td>
                    <td>2947</td>
                    <td>Amy Jinsen</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2010/03/11</td>
                    <td>Extensive</td>
                    <td>Trump</td>
                    <td><a href=#>4</a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Shou McMoney</td>
                    <td>8899</td>
                    <td>Rihanna Jenson</td>
                    <td>Bonita</td>
                    <td>92101</td>
                    <td>2011/08/14</td>
                    <td>Minor</td>
                    <td>Trump</td>
                    <td><a href=#>1</a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Michelle Natali</td>
                    <td>2769</td>
                    <td>Julie Kyle</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2011/06/02</td>
                    <td>Major</td>
                    <td>Cribz</td>
                    <td><a href=#>10</a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Suki Zoomzoom</td>
                    <td>6832</td>
                    <td>Julie Kyle</td>
                    <td>Pacific Beach</td>
                    <td>92101</td>
                    <td>2009/10/22</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>5</a></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Prescott Elvis</td>
                    <td>3606</td>
                    <td>Julie Kyle</td>
                    <td>Point Loma</td>
                    <td>92101</td>
                    <td>2011/05/07</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>6</a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Gavin Grey</td>
                    <td>2860</td>
                    <td>Julie Kyle</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2008/10/26</td>
                    <td>Normal</td>
                    <td>Cribz</td>
                    <td><a href=#>2</a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Martena Fridays</td>
                    <td>8240</td>
                    <td>Sharon Stone</td>
                    <td>San Diego</td>
                    <td>92101</td>
                    <td>2011/03/09</td>
                    <td>Major</td>
                    <td>Donkeys</td>
                    <td><a href=#>5</a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Unity Stone</td>
                    <td>5384</td>
                    <td>Rihanna Jenson</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2009/12/09</td>
                    <td>Extensive</td>
                    <td>Hell is here</td>
                    <td><a href=#>3</a></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Howard Benjin</td>
                    <td>7031</td>
                    <td>Rihanna Jenson</td>
                    <td>Chula Vista</td>
                    <td>92101</td>
                    <td>2008/12/16</td>
                    <td>Monolithic</td>
                    <td>Bloods</td>
                    <td><a href=#>2</a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Hope Grace</td>
                    <td>6318</td>
                    <td>Rihanna Jenson</td>
                    <td>Chula Vista</td>
                    <td>92115</td>
                    <td>2010/02/12</td>
                    <td>Normal</td>
                    <td>Lakers</td>
                    <td><a href=#>9</a></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Vivian Vi</td>
                    <td>9422</td>
                    <td>Sharon Stone</td>
                    <td>Chula Vista</td>
                    <td>92115</td>
                    <td>2009/02/14</td>
                    <td>Major</td>
                    <td>Chargers</td>
                    <td><a href=#>2</a></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Timothy Brian</td>
                    <td>7580</td>
                    <td>Sharon Stone</td>
                    <td>La Mesa</td>
                    <td>92101</td>
                    <td>2008/12/11</td>
                    <td>Minor</td>
                    <td>Pandas</td>
                    <td><a href=#>3</a></td>
                </tr>
            </tbody>
          </table>
          <input type="button" value="Download full .csv" id="csv-download" onclick=""/>
        </div>
        <!-- Footer (for copyright and what not) -->
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>