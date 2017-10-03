<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Blue Infinity</title>
        
        <meta name="author" content="Pedro Batista da Silva">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://www.blue-infinity.com/sites/blue-infinity/themes/blue_infinity/favicon.gif">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="/assets/css/styles.css" rel="stylesheet">
        
    </head>
    
    <body>
        
        <input type="checkbox" id="nav-trigger" class="nav-trigger">
        <label for="nav-trigger" class="hidden-large"></label>
        
        <ul class="offscreen-menu">
        
            <li class="offscreen-menu__list-item">
                
                <a href="." class="offscreen-menu__link offscreen-menu__link--border-top">
                    
                    → Link 1
                    
                </a>
                
            </li>
            
            <li class="offscreen-menu__list-item">
                
                <a href="." class="offscreen-menu__link">
                    
                    → Link 2
                    
                </a>
                
            </li>
            
            <li class="offscreen-menu__list-item">
                
                <a href="." class="offscreen-menu__link">
                    
                    → Link 3
                    
                </a>
                
            </li>             
        
        </ul>
        
        <div class="site-wrap">
        
            <header>
                
                <div class="header__top-bar"></div>
                
                <a href="#" class="header__logo" alt="Logo description">
                    
                    <img src="https://www.blue-infinity.com/sites/blue-infinity/themes/blue_infinity/logos/0<?=rand(2,9)?>.png" class="header__logo-img" alt="Blue Infinity">
                    
                </a>    
                
                <nav class="header__navbar">
                    
                    <ul class="hidden-small">
                        
                        <li class="header__list-item">
                            
                            <a href="#" class="header__list-item-link">
                                
                                Link 1
                                
                            </a>
                            
                        </li>
                        
                        <li class="header__list-item">
                            
                            <a href="#" class="header__list-item-link">
                                
                                Link 2
                                
                            </a>
                            
                        </li>
                        
                        <li class="header__list-item">
                            
                            <a href="#" class="header__list-item-link">
                                
                                Link 3
                                
                            </a>
                            
                        </li>                    
                        
                    </ul>
                    
                </nav>
                
                <div class="header__hero">
                    
                    <h1 class="header__hero-h1">
                        
                        Blue Infinity
                        
                    </h1>
                    
                    <div class="header__hero-img"></div>
                    
                </div>
                
            </header>
            
            <main>
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-12 main__subtitle">
                        
                            <h2>Digital Addicts latest news</h2>
                            
                        </div>    
                        
                    </div>
                    
                    <div class="row">
                        
                        <? for( $i = 0; $i < 6; $i++ ): ?>
                        
                        <div class="col-04">
                            
                            <article class="main__article">
                                
                                <a href="#" class="main__article-link">
                                
                                    <img src="/assets/img/blue-infinity-article-0<?=rand(1,4)?>.jpg" class="main__article-img" alt="Blue Infinity">
                                    
                                    <section class="main__article-intro">
                                        
                                        <span class="main__article-intro-text">
                                            
                                            Lorem ipsum tincidunt dictum. Quisque tristique tellus quis suscipit lacinia.
                                            
                                        </span>
                                        
                                        <button class="btn" title="see more">SEE MORE</button>
                                        
                                    </section>
                                
                                </a>
                                
                            </article>
                            
                        </div>
                        
                        <? endfor ?>
                    
                    </div>
                        
                </div>
                
            </main>
            
            <footer class="home__footer">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <? for( $i = 0; $i < 4; $i++ ): ?>
                        
                            <div class="col-03">
                                
                                <article class="home__footer-article">
                                    
                                </article>
                                
                            </div>
                            
                        <? endfor ?>    
                        
                    </div>
                
                </div>
                
            </footer>
            
        </div>
        <!-- /site wrap -->
        
    </body>
    
</html>