/**
 * Neon Effects and Futuristic Interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    
    
    // Neon Glow Pulse Effect
    function createNeonPulse() {
        const neonElements = document.querySelectorAll('.knockout-logo, .hero-title, .section-title');
        
        neonElements.forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.animation = 'none';
                this.style.filter = `
                    drop-shadow(0 0 20px var(--neon-green-glow))
                    drop-shadow(0 0 40px var(--neon-green-glow))
                    drop-shadow(0 0 60px var(--neon-green-glow))
                `;
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.animation = '';
                this.style.filter = '';
            });
        });
    }
    
    
    
    // Particle System
    function createParticleSystem() {
        const particleContainer = document.createElement('div');
        particleContainer.className = 'particle-system';
        particleContainer.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        `;
        document.body.appendChild(particleContainer);
        
        function createParticle() {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: 2px;
                height: 2px;
                background: #00ff41;
                border-radius: 50%;
                box-shadow: 0 0 6px #00ff41;
                left: ${Math.random() * 100}%;
                top: 100%;
                animation: particleFloat ${3 + Math.random() * 4}s linear forwards;
            `;
            
            particleContainer.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 7000);
        }
        
        // Create particles periodically
        setInterval(createParticle, 200);
    }
    
    // Neon Border Animation
    function animateNeonBorders() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes neonBorderFlow {
                0% { border-image-source: linear-gradient(0deg, #00ff41, transparent, transparent, #00ff41); }
                25% { border-image-source: linear-gradient(90deg, #00ff41, transparent, transparent, #00ff41); }
                50% { border-image-source: linear-gradient(180deg, #00ff41, transparent, transparent, #00ff41); }
                75% { border-image-source: linear-gradient(270deg, #00ff41, transparent, transparent, #00ff41); }
                100% { border-image-source: linear-gradient(360deg, #00ff41, transparent, transparent, #00ff41); }
            }
            
            .neon-border-flow {
                border: 2px solid;
                border-image: linear-gradient(0deg, #00ff41, transparent, transparent, #00ff41) 1;
                animation: neonBorderFlow 3s linear infinite;
            }
        `;
        document.head.appendChild(style);
        
        // Apply to specific elements
        const borderElements = document.querySelectorAll('.menu-category, .event-card, .gallery-item');
        borderElements.forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.classList.add('neon-border-flow');
            });
            
            element.addEventListener('mouseleave', function() {
                this.classList.remove('neon-border-flow');
            });
        });
    }
    
    // Holographic Text Effect
    function createHolographicText() {
        const holoElements = document.querySelectorAll('.section-title');
        
        holoElements.forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.background = 'linear-gradient(45deg, #00ff41, #00d4ff, #8b00ff, #00ff41)';
                this.style.backgroundSize = '400% 400%';
                this.style.webkitBackgroundClip = 'text';
                this.style.webkitTextFillColor = 'transparent';
                this.style.animation = 'gradientShift 2s ease infinite';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.background = '';
                this.style.webkitBackgroundClip = '';
                this.style.webkitTextFillColor = '';
                this.style.animation = '';
            });
        });
    }
    
    // Matrix Rain Effect (subtle)
    function createMatrixRain() {
        const canvas = document.createElement('canvas');
        canvas.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.1;
        `;
        document.body.appendChild(canvas);
        
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        const matrix = "01";
        const matrixArray = matrix.split("");
        
        const fontSize = 10;
        const columns = canvas.width / fontSize;
        
        const drops = [];
        for (let x = 0; x < columns; x++) {
            drops[x] = 1;
        }
        
        function draw() {
            ctx.fillStyle = 'rgba(10, 10, 10, 0.04)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#00ff41';
            ctx.font = fontSize + 'px monospace';
            
            for (let i = 0; i < drops.length; i++) {
                const text = matrixArray[Math.floor(Math.random() * matrixArray.length)];
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                
                if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        
        setInterval(draw, 35);
        
        // Resize handler
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    }
    
    // Audio Visualizer Effect (visual only)
    function createAudioVisualizer() {
        const visualizer = document.createElement('div');
        visualizer.className = 'audio-visualizer';
        visualizer.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 200px;
            height: 60px;
            display: flex;
            align-items: end;
            gap: 2px;
            pointer-events: none;
            z-index: 1000;
        `;
        
        // Create bars
        for (let i = 0; i < 20; i++) {
            const bar = document.createElement('div');
            bar.style.cssText = `
                width: 8px;
                background: linear-gradient(to top, #00ff41, #00d4ff);
                border-radius: 2px 2px 0 0;
                animation: audioBar ${0.5 + Math.random() * 1}s ease-in-out infinite alternate;
                height: ${10 + Math.random() * 50}px;
            `;
            visualizer.appendChild(bar);
        }
        
        document.body.appendChild(visualizer);
        
        // Add animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes audioBar {
                0% { height: 5px; opacity: 0.3; }
                100% { height: ${20 + Math.random() * 40}px; opacity: 1; }
            }
        `;
        document.head.appendChild(style);
    }
    
    // Initialize all effects
    createNeonPulse();
    createParticleSystem();
    animateNeonBorders();
    createHolographicText();
    createMatrixRain();
    createAudioVisualizer();
    
    // Smooth scroll enhancement
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    console.log('🎮 KNOCKOUT Neon Theme Activated! 🎮');
});