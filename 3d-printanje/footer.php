 <div class="footer-container">
        <div class="footer-content">
            <div class="logo-section">
                <img src="Group 54.png" alt="">
                <!-- 3D Studio Logo based on Image 1 -->
                <g transform="scale(0.8)">
                    <!-- Hexagon outline -->
                    <path d="M60,10 L110,40 L110,100 L60,130 L10,100 L10,40 Z" fill="none" stroke="#4169A0" stroke-width="10"/>
                    
                    <!-- Inner cube -->
                    <polygon points="60,50 90,65 60,80 30,65" fill="#26A9C4"/>
                    <polygon points="60,80 90,65 90,95 60,110" fill="#1C7F91"/>
                    <polygon points="60,80 30,65 30,95 60,110" fill="#2296AC"/>
                    
                    <!-- Text "3D Studio" -->
                    <g transform="translate(130, 85)" fill="#2C4B69">
                        <!-- 3 -->
                        <rect x="0" y="0" width="30" height="15" />
                        <rect x="0" y="15" width="30" height="15" />
                        <rect x="0" y="30" width="30" height="15" />
                        <rect x="30" y="0" width="15" height="15" />
                        <rect x="30" y="30" width="15" height="15" />
                        
                        <!-- D -->
                        <rect x="60" y="0" width="15" height="45" />
                        <rect x="75" y="0" width="15" height="15" />
                        <rect x="75" y="30" width="15" height="15" />
                        <rect x="90" y="15" width="15" height="15" />
                        
                        <!-- Space -->
                        
                        <!-- S -->
                        <rect x="120" y="0" width="40" height="15" />
                        <rect x="120" y="15" width="15" height="15" />
                        <rect x="120" y="30" width="40" height="15" />
                        <rect x="145" y="15" width="15" height="15" />
                        
                        <!-- t -->
                        <rect x="175" y="0" width="30" height="15" />
                        <rect x="185" y="15" width="15" height="30" />
                        
                        <!-- u -->
                        <rect x="215" y="0" width="15" height="30" />
                        <rect x="215" y="30" width="30" height="15" />
                        <rect x="230" y="0" width="15" height="30" />
                        
                        <!-- d -->
                        <rect x="260" y="0" width="15" height="45" />
                        <rect x="260" y="30" width="30" height="15" />
                        <rect x="275" y="15" width="15" height="15" />
                        
                        <!-- i -->
                        <rect x="305" y="0" width="15" height="45" />
                        
                        <!-- o -->
                        <rect x="335" y="0" width="15" height="45" />
                        <rect x="335" y="0" width="30" height="15" />
                        <rect x="335" y="30" width="30" height="15" />
                        <rect x="350" y="15" width="15" height="15" />
                    </g>
                </g>
            </svg>
            </div>
            
            <div class="navigation">
                <a href="#" class="nav-link">POČETNA</a>
                <a href="#" class="nav-link">USLUGE</a>
                <a href="#" class="nav-link">CIJENE</a>
                <a href="#" class="nav-link">EDUKACIJA</a>
                <a href="#" class="nav-link">GALERIJA</a>
            </div>
            
            <div class="contact-section">
                <h2 class="kontakti-heading">kontakti</h2>
                <p class="contact-info">3D.studio@gmail.com</p>
                <p class="contact-info">092/859 5225</p>
                <p class="contact-info">Kruge 44, Zagreb</p>
            </div>
            
            <img src="view-abstract-fluid-monochrome-palette-removebg-preview 2.png" alt="">
                <!-- Blue glass sculpture illustration based on Image 2 -->
                <defs>
                    <linearGradient id="blueGlass" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#a8d0e6;stop-opacity:0.8" />
                        <stop offset="50%" style="stop-color:#4169A0;stop-opacity:0.9" />
                        <stop offset="100%" style="stop-color:#2C4B69;stop-opacity:0.8" />
                    </linearGradient>
                    <radialGradient id="highlight" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                        <stop offset="0%" style="stop-color:#ffffff;stop-opacity:0.9" />
                        <stop offset="100%" style="stop-color:#ffffff;stop-opacity:0" />
                    </radialGradient>
                </defs>
                
                <!-- Main flowing glass structure -->
                <path d="M150,20 C190,40 170,80 130,100 C90,120 110,180 150,200 C190,220 170,260 130,280 C90,300 110,350 150,370" 
                      fill="none" stroke="url(#blueGlass)" stroke-width="40" stroke-linecap="round" />
                
                <!-- Glass bubble at top -->
                <circle cx="150" cy="50" r="25" fill="url(#blueGlass)" opacity="0.7" />
                
                <!-- Glass bubble at bottom -->
                <ellipse cx="150" cy="360" rx="40" ry="20" fill="url(#blueGlass)" opacity="0.7" />
                
                <!-- Highlights -->
                <ellipse cx="130" cy="50" rx="10" ry="10" fill="url(#highlight)" opacity="0.6" />
                <ellipse cx="160" cy="200" rx="15" ry="10" fill="url(#highlight)" opacity="0.5" />
                <ellipse cx="140" cy="300" rx="12" ry="8" fill="url(#highlight)" opacity="0.5" />
            </svg>
        </div>
    </div>
<script>
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
        
        // Toggle navigation
        burger.addEventListener('click', () => {
            // Toggle nav
            nav.classList.toggle('nav-active');
            
            // Animate links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                }
            });
            
            // Burger animation
            burger.classList.toggle('toggle');
        });
    </script>
</body>
</html>