<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мед клиника</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body>

<header>
    <div class="header-wrapper">

        <div class="burger">
            <span></span>
        </div>
        <div class="header-logo">
            <a href="/index.php">
                <img src="/img/Microsoft_Word_2013-2019_logo.svg.png" alt="logo">
            </a>
        </div>
        <div class="header-info">
            <div class="header-info-top">
                <nav class="nav-h">
                    <ul class="nav-bar">
                        <li><a href="/State.php">Статьи</a></li>
                        <li><a href="/news.php">Новости</a></li>
                        <li><a href="/logistic.php">Личиный кабинет</a></li>
                    </ul>
                </nav>
                <div class="header-oder-links">

                    <a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="#FFFFFF"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.25946 6.73772V9.69897H12.3714C11.9887 11.5808 10.3867 12.6619 8.25946 12.6619C5.78178 12.6278 3.79112 10.6096 3.79112 8.13168C3.79112 5.65376 5.78178 3.63552 8.25946 3.60142C9.28934 3.60018 10.2875 3.95758 11.0826 4.61224L13.3136 2.38122C10.7544 0.131376 7.01696 -0.157998 4.14198 1.6711C1.26701 3.50021 -0.0545117 7.0082 0.899015 10.2796C1.85254 13.5509 4.85196 15.7995 8.25946 15.7974C12.0925 15.7974 15.5781 13.0095 15.5781 8.13125C15.5722 7.66157 15.5146 7.19396 15.4065 6.73686L8.25946 6.73772Z"
                                  fill="#2E3A59"></path>
                        </svg>
                    </a>
                    <a>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="#FFFFFF"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.61095 15.9066C6.50006 15.9066 6.25122 15.8955 5.42746 15.8594C4.78507 15.8383 4.151 15.7077 3.55254 15.4733C2.5171 15.0703 1.69834 14.2512 1.29577 13.2157C1.07036 12.615 0.94878 11.9804 0.936236 11.339C0.888184 10.517 0.888184 10.2475 0.888184 8.15295C0.888184 6.03605 0.899339 5.78892 0.936236 4.96945C0.949054 4.32891 1.07063 3.6952 1.29577 3.09539C1.6979 2.05842 2.51799 1.23864 3.55511 0.836908C4.15461 0.610547 4.78848 0.488649 5.42917 0.476512C6.24864 0.430176 6.51808 0.430176 8.61095 0.430176C10.739 0.430176 10.9836 0.441331 11.7945 0.476512C12.4368 0.488754 13.0724 0.610639 13.6737 0.836908C14.7105 1.2391 15.5304 2.05872 15.933 3.09539C16.1622 3.70394 16.2844 4.34755 16.2943 4.99777C16.3423 5.81981 16.3423 6.08839 16.3423 8.18212C16.3423 10.2759 16.3303 10.5504 16.2943 11.363C16.2815 12.0051 16.1596 12.6402 15.9339 13.2414C15.5303 14.2777 14.7103 15.0971 13.6737 15.4999C13.0732 15.7249 12.439 15.8464 11.7979 15.8594C10.9784 15.9066 10.7098 15.9066 8.61095 15.9066ZM8.58178 1.78853C6.4829 1.78853 6.26495 1.79882 5.44548 1.83572C4.95635 1.8422 4.47196 1.93246 4.01333 2.10258C3.33609 2.36173 2.80019 2.89545 2.53828 3.57163C2.36685 4.03525 2.27657 4.52494 2.27142 5.01922C2.22594 5.8507 2.22594 6.06866 2.22594 8.15295C2.22594 10.2124 2.23366 10.4621 2.27142 11.2884C2.2791 11.7777 2.36932 12.2621 2.53828 12.7214C2.80058 13.3971 3.33638 13.9304 4.01333 14.1896C4.47165 14.3608 4.95624 14.4511 5.44548 14.4564C6.2761 14.5045 6.49492 14.5045 8.58178 14.5045C10.6867 14.5045 10.9046 14.4942 11.7172 14.4564C12.2067 14.4505 12.6914 14.3602 13.1502 14.1896C13.8234 13.9282 14.3558 13.3961 14.6176 12.7231C14.7887 12.2591 14.8789 11.7692 14.8844 11.2747H14.8939C14.9308 10.4543 14.9308 10.2355 14.9308 8.13922C14.9308 6.04291 14.9213 5.82239 14.8844 5.00291C14.8767 4.51419 14.7865 4.03028 14.6176 3.57163C14.3564 2.89766 13.8239 2.36455 13.1502 2.10258C12.6915 1.9316 12.2067 1.84132 11.7172 1.83572C10.8875 1.78853 10.6704 1.78853 8.58178 1.78853ZM8.61095 12.1164C7.00633 12.1175 5.5591 11.1517 4.94424 9.66957C4.32937 8.18742 4.66797 6.48082 5.80212 5.34569C6.93628 4.21055 8.64259 3.87047 10.1253 4.48406C11.608 5.09764 12.575 6.54403 12.5753 8.14866C12.5729 10.3377 10.8 12.1122 8.61095 12.1164ZM8.61095 5.57268C7.18923 5.57268 6.0367 6.72522 6.0367 8.14694C6.0367 9.56866 7.18923 10.7212 8.61095 10.7212C10.0327 10.7212 11.1852 9.56866 11.1852 8.14694C11.1819 6.72659 10.0313 5.57599 8.61095 5.57268ZM12.7298 4.96087C12.2196 4.95897 11.8072 4.54434 11.8082 4.03414C11.8091 3.52394 12.223 3.11084 12.7332 3.11084C13.2434 3.11084 13.6573 3.52393 13.6582 4.03414C13.6584 4.28029 13.5606 4.5164 13.3864 4.69029C13.2122 4.86419 12.9759 4.96155 12.7298 4.96087Z"
                                  fill="#2E3A59"></path>
                        </svg>
                    </a>
                    <a>
                        <svg width="15" height="19" viewBox="0 0 15 19" fill="#FFFFFF"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.84229 18.9275C6.57922 17.8502 5.40847 16.6691 4.34229 15.3965C2.74229 13.4855 0.842286 10.6395 0.842286 7.92754C0.840868 5.09509 2.54653 2.54093 5.16335 1.45694C7.78018 0.372945 10.7924 0.972781 12.7943 2.97654C14.1107 4.28715 14.8482 6.06993 14.8423 7.92754C14.8423 10.6395 12.9423 13.4855 11.3423 15.3965C10.2761 16.6691 9.10535 17.8502 7.84229 18.9275ZM7.84229 2.92754C5.08223 2.93085 2.84559 5.16749 2.84229 7.92754C2.84229 9.09354 3.36929 11.1125 5.87729 14.1135C6.49543 14.8516 7.1513 15.5572 7.84229 16.2275C8.53333 15.558 9.18953 14.8534 9.80829 14.1165C12.3153 11.1115 12.8423 9.09254 12.8423 7.92754C12.839 5.16749 10.6023 2.93085 7.84229 2.92754ZM7.84229 10.9275C6.18543 10.9275 4.84229 9.58439 4.84229 7.92754C4.84229 6.27069 6.18543 4.92754 7.84229 4.92754C9.49914 4.92754 10.8423 6.27069 10.8423 7.92754C10.8423 8.72319 10.5262 9.48625 9.96361 10.0489C9.401 10.6115 8.63794 10.9275 7.84229 10.9275Z"
                                  fill="#1A3444"></path>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</header>
<main id="main">
    <div class="news-wrapper">
        <h1 class="doc-title">Новости</h1>
        <?php
        // Include config file
        require_once "config2.php";

        // Attempt select query execution
        $sql = "SELECT * FROM `news` ORDER BY `news`.`time` DESC";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
                    echo " ";
                    echo "<div class='news-container'>";
                    echo "<div class='news-top'>";
                    echo "<h3 class='news-title'>" . $row['title'] . "</h3>";
                    echo "<p class='news-time'>" . $row['time'] . "</p>";
                    echo "</div>";
                    echo "<p class='news-content'>" . $row['content'] . "</p>";
                    echo "</div>";
  }
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "<p class='lead'><em>No records were found.</em></p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // Close connection
        mysqli_close($link);
        ?>
        <!--<div class="news-container">
            <div class="news-card">
                <div class="news-top">
                <h3 class="news-title">Ура, мы открылись</h3>
                <p class="news-time">10/01/22</p>
                </div>
                <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!</p>
            </div>
        </div>
        <div class="news-container">
            <div class="news-card">
                <div class="news-top">
                    <h3 class="news-title">Ура, мы открылись</h3>
                    <p class="news-time">10/01/22</p>
                </div>
                <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!</p>
            </div>
        </div>
        <div class="news-container">
            <div class="news-card">
                <div class="news-top">
                    <h3 class="news-title">Ура, мы открылись</h3>
                    <p class="news-time">10/01/22</p>
                </div>
                <p class="news-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam autem
                    blanditiis deleniti dicta dolores dolorum illum, inventore maiores modi natus neque odit quae
                    reprehenderit temporibus totam ullam velit voluptatibus!</p>
            </div>
        </div>-->
    </div>
</main>
<footer>
    <div class="header-logo footer-logo">
        <a href="/index.php">
            <img src="/img/Microsoft_Word_2013-2019_logo.svg.png" alt="logo">
        </a>
    </div>
    <div class="footer-line">
        <p>2022</p>
    </div>
    <p class="footer-dop-info">Политика конфиденциальности</p>
    <div class="header-oder-links">

        <a>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="#FFFFFF"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M8.25946 6.73772V9.69897H12.3714C11.9887 11.5808 10.3867 12.6619 8.25946 12.6619C5.78178 12.6278 3.79112 10.6096 3.79112 8.13168C3.79112 5.65376 5.78178 3.63552 8.25946 3.60142C9.28934 3.60018 10.2875 3.95758 11.0826 4.61224L13.3136 2.38122C10.7544 0.131376 7.01696 -0.157998 4.14198 1.6711C1.26701 3.50021 -0.0545117 7.0082 0.899015 10.2796C1.85254 13.5509 4.85196 15.7995 8.25946 15.7974C12.0925 15.7974 15.5781 13.0095 15.5781 8.13125C15.5722 7.66157 15.5146 7.19396 15.4065 6.73686L8.25946 6.73772Z"
                      fill="#2E3A59"></path>
            </svg>
        </a>
        <a>
            <svg width="17" height="16" viewBox="0 0 17 16" fill="#FFFFFF"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M8.61095 15.9066C6.50006 15.9066 6.25122 15.8955 5.42746 15.8594C4.78507 15.8383 4.151 15.7077 3.55254 15.4733C2.5171 15.0703 1.69834 14.2512 1.29577 13.2157C1.07036 12.615 0.94878 11.9804 0.936236 11.339C0.888184 10.517 0.888184 10.2475 0.888184 8.15295C0.888184 6.03605 0.899339 5.78892 0.936236 4.96945C0.949054 4.32891 1.07063 3.6952 1.29577 3.09539C1.6979 2.05842 2.51799 1.23864 3.55511 0.836908C4.15461 0.610547 4.78848 0.488649 5.42917 0.476512C6.24864 0.430176 6.51808 0.430176 8.61095 0.430176C10.739 0.430176 10.9836 0.441331 11.7945 0.476512C12.4368 0.488754 13.0724 0.610639 13.6737 0.836908C14.7105 1.2391 15.5304 2.05872 15.933 3.09539C16.1622 3.70394 16.2844 4.34755 16.2943 4.99777C16.3423 5.81981 16.3423 6.08839 16.3423 8.18212C16.3423 10.2759 16.3303 10.5504 16.2943 11.363C16.2815 12.0051 16.1596 12.6402 15.9339 13.2414C15.5303 14.2777 14.7103 15.0971 13.6737 15.4999C13.0732 15.7249 12.439 15.8464 11.7979 15.8594C10.9784 15.9066 10.7098 15.9066 8.61095 15.9066ZM8.58178 1.78853C6.4829 1.78853 6.26495 1.79882 5.44548 1.83572C4.95635 1.8422 4.47196 1.93246 4.01333 2.10258C3.33609 2.36173 2.80019 2.89545 2.53828 3.57163C2.36685 4.03525 2.27657 4.52494 2.27142 5.01922C2.22594 5.8507 2.22594 6.06866 2.22594 8.15295C2.22594 10.2124 2.23366 10.4621 2.27142 11.2884C2.2791 11.7777 2.36932 12.2621 2.53828 12.7214C2.80058 13.3971 3.33638 13.9304 4.01333 14.1896C4.47165 14.3608 4.95624 14.4511 5.44548 14.4564C6.2761 14.5045 6.49492 14.5045 8.58178 14.5045C10.6867 14.5045 10.9046 14.4942 11.7172 14.4564C12.2067 14.4505 12.6914 14.3602 13.1502 14.1896C13.8234 13.9282 14.3558 13.3961 14.6176 12.7231C14.7887 12.2591 14.8789 11.7692 14.8844 11.2747H14.8939C14.9308 10.4543 14.9308 10.2355 14.9308 8.13922C14.9308 6.04291 14.9213 5.82239 14.8844 5.00291C14.8767 4.51419 14.7865 4.03028 14.6176 3.57163C14.3564 2.89766 13.8239 2.36455 13.1502 2.10258C12.6915 1.9316 12.2067 1.84132 11.7172 1.83572C10.8875 1.78853 10.6704 1.78853 8.58178 1.78853ZM8.61095 12.1164C7.00633 12.1175 5.5591 11.1517 4.94424 9.66957C4.32937 8.18742 4.66797 6.48082 5.80212 5.34569C6.93628 4.21055 8.64259 3.87047 10.1253 4.48406C11.608 5.09764 12.575 6.54403 12.5753 8.14866C12.5729 10.3377 10.8 12.1122 8.61095 12.1164ZM8.61095 5.57268C7.18923 5.57268 6.0367 6.72522 6.0367 8.14694C6.0367 9.56866 7.18923 10.7212 8.61095 10.7212C10.0327 10.7212 11.1852 9.56866 11.1852 8.14694C11.1819 6.72659 10.0313 5.57599 8.61095 5.57268ZM12.7298 4.96087C12.2196 4.95897 11.8072 4.54434 11.8082 4.03414C11.8091 3.52394 12.223 3.11084 12.7332 3.11084C13.2434 3.11084 13.6573 3.52393 13.6582 4.03414C13.6584 4.28029 13.5606 4.5164 13.3864 4.69029C13.2122 4.86419 12.9759 4.96155 12.7298 4.96087Z"
                      fill="#2E3A59"></path>
            </svg>
        </a>
        <a>
            <svg width="15" height="19" viewBox="0 0 15 19" fill="#FFFFFF"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M7.84229 18.9275C6.57922 17.8502 5.40847 16.6691 4.34229 15.3965C2.74229 13.4855 0.842286 10.6395 0.842286 7.92754C0.840868 5.09509 2.54653 2.54093 5.16335 1.45694C7.78018 0.372945 10.7924 0.972781 12.7943 2.97654C14.1107 4.28715 14.8482 6.06993 14.8423 7.92754C14.8423 10.6395 12.9423 13.4855 11.3423 15.3965C10.2761 16.6691 9.10535 17.8502 7.84229 18.9275ZM7.84229 2.92754C5.08223 2.93085 2.84559 5.16749 2.84229 7.92754C2.84229 9.09354 3.36929 11.1125 5.87729 14.1135C6.49543 14.8516 7.1513 15.5572 7.84229 16.2275C8.53333 15.558 9.18953 14.8534 9.80829 14.1165C12.3153 11.1115 12.8423 9.09254 12.8423 7.92754C12.839 5.16749 10.6023 2.93085 7.84229 2.92754ZM7.84229 10.9275C6.18543 10.9275 4.84229 9.58439 4.84229 7.92754C4.84229 6.27069 6.18543 4.92754 7.84229 4.92754C9.49914 4.92754 10.8423 6.27069 10.8423 7.92754C10.8423 8.72319 10.5262 9.48625 9.96361 10.0489C9.401 10.6115 8.63794 10.9275 7.84229 10.9275Z"
                      fill="#1A3444"></path>
            </svg>
        </a>
    </div>
</footer>
<script rel="script" src="assets/js/script.js"></script>
</body>
</html>