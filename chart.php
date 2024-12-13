<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard 1</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/admin.css" />
    <style>
      .details {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 30px;
        margin-top: 10px;
      }
      .details .recentOrders {
        position: relative;
        display: grid;
        min-height: 500px;
        background: var(--white);
        padding: 20px;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
      }
      .details .cardHeader {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }
      .cardHeader h2 {
        font-weight: 600;
        color: var(--blue);
      }
      .cardHeader .btn {
        position: relative;
        padding: 5px 10px;
        background: var(--blue);
        text-decoration: none;
        color: var(--white);
        border-radius: 6px;
      }
      .details table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
      }
      .details table thead td {
        font-weight: 600;
      }
      .details .recentOrders table tr {
        color: var(--black1);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }
      .details .recentOrders table tr:last-child {
        border-bottom: none;
      }
      .details .recentOrders table tbody tr:hover {
        background: var(--blue);
        color: var(--white);
      }
      .details .recentOrders table tr td {
        padding: 10px;
      }
      .details .recentOrders table tr td:last-child {
        text-align: end;
      }
      .details .recentOrders table tr td:last-child(2) {
        text-align: end;
      }
      .details .recentOrders table tr td:last-child(3) {
        text-align: center;
      }
      .status.delivered {
        padding: 2px 4px;
        background: #8de02c;
        color: var(--white);
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
      }
      .status.delivered {
        padding: 2px 4px;
        background: #8de02c;
        color: var(--white);
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
      }
      .status.pending {
        padding: 2px 4px;
        background: #e9b10a;
        color: var(--white);
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
      }
      .status.return {
        padding: 2px 4px;
        background: #f00;
        color: var(--white);
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
      }
      .status.inprogress {
        padding: 2px 4px;
        background: #1795ce;
        color: var(--white);
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
      }
      .recentCustomer {
        position: relative;
        display: grid;
        min-height: 500px;
        padding: 20px;
        background: var(--white);
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
      }
      .recentCustomer .imgbx {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        overflow: hidden;
      }
      .recentCustomer .imgbx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .recentCustomer table tr td {
        padding: 12px 10px;
      }
      .recentCustomer table tr td h4 {
        font-size: 16px;
        font-weight: 500;
        line-height: 1.2rem;
      }
      .recentCustomer table tr td h4 span {
        font-size: 14px;
        color: var(--black2);
      }
      .recentCustomer table tr:hover {
        background: var(--blue);
        color: var(--white);
      }
      .recentCustomer table tr:hover td h4 span {
        color: var(--white);
      }
      @media (max-width: 991px) {
        .navigation {
          left: -300px;
        }
        .navigation.active {
          width: 300px;
          left: 0;
        }
        .main {
          width: 100%;
          left: 0;
        }
        .main.active {
          left: 300px;
        }
        .cardBox {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (max-width: 768px) {
        .details {
          grid-template-columns: 1fr;
        }
        .recentOrders {
          overflow: auto;
        }
        .status.inprogress {
          white-space: nowrap;
        }
      }
      @media (max-width: 480px) {
        .cardBox {
          grid-template-columns: repeat(1, 1fr);
        }
        .cardHeader h2 {
          font-size: 20px;
        }
        .user {
          min-width: 40px;
        }
        .navigation {
          width: 100%;
          left: -100%;
          z-index: 1000;
        }
        .navigation.active {
          width: 100%;
          left: 0;
        }
        .toggle {
          z-index: 10001;
        }
        .main.active .toggle {
          color: #ffff;
          position: fixed;
          right: 0;
          left: initiald;
        }
      }
    </style>
  </head>
  <body>
    <!-- navigation -->
    <div class="container">
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <div class="search">
            <label>
              <input type="text" placeholder="search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <div class="user">
            <img src="img/avatar1.jpg" alt="" />
          </div>
        </div>
        <div class="cardBox">
          <div class="card">
            <div>
              <div class="number">1.504</div>
              <div class="cardName">Daily Views</div>
            </div>

            <div class="iconBox"><ion-icon name="eye-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="number">80</div>
              <div class="cardName">Sales</div>
            </div>

            <div class="iconBox"><ion-icon name="cart-outline"></ion-icon></div>
          </div>
          <div class="card">
            <div>
              <div class="number">284</div>
              <div class="cardName">Comments</div>
            </div>
            <div class="iconBox">
              <ion-icon name="chatbubble-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">$3.84</div>
              <div class="cardName">Earnings</div>
            </div>

            <div class="iconBox"><ion-icon name="cash-outline"></ion-icon></div>
          </div>
        </div>
        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Recent Orders</h2>
              <a href="#" class="btn">View All</a>
            </div>

            <canvas id="myChart"></canvas>
          
          </div>
          <div class="recentCustomer">
            <div class="cardHeader">
              <h2>Recent Customer</h2>
            </div>
            <canvas id="doughnut"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="icon"
              ><ion-icon name="school-outline"></ion-icon
            ></span>
            <span class="title">University</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="form.html">
            <span class="icon"
              ><ion-icon name="people-outline"></ion-icon
            ></span>
            <span class="title">Form</span>
          </a>
        </li>
        <li>
          <a href="table.html">
            <span class="icon"
              ><ion-icon name="chatbubble-outline"></ion-icon
            ></span>
            <span class="title">Table</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"
              ><ion-icon name="help-circle-outline"></ion-icon
            ></span>
            <span class="title">Help</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"
              ><ion-icon name="settings-outline"></ion-icon
            ></span>
            <span class="title">Setting</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"
              ><ion-icon name="lock-closed-outline"></ion-icon
            ></span>
            <span class="title">Password</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"
              ><ion-icon name="log-out-outline"></ion-icon
            ></span>
            <span class="title">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>

    <script src="js/main.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/barchart.js"></script>
    
    <script src="js/doughnut.js"></script>
  </body>
</html>
