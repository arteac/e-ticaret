<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <title>E-Ticaret 2025: Geleceğin Alışverişi</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --neon-purple: rgb(147, 112, 219); /* Softer purple for contrast */
            --neon-cyan: #00ced1; /* Darker cyan, eye-friendly */
            --light-bg: #ffffff; /* White background */
            --glow-effect: 0 0 15px rgba(147, 112, 219, 0.3); /* Subtle purple glow */
            --card-hover: rgba(147, 112, 219, 0.15); /* Light hover effect */
            --text-primary: #2c2c2c; /* Dark gray for main text */
            --text-secondary: #666666; /* Mid-gray for secondary text */
            --shadow-soft: rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            background: var(--light-bg);
            color: var(--text-primary);
            font-family: 'Roboto', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at center, rgba(147, 112, 219, 0.15), transparent 80%);
            z-index: -1;
            animation: ambientGlow 20s infinite alternate;
        }

        @keyframes ambientGlow {
            0% { opacity: 0.6; }
            50% { opacity: 0.9; }
            100% { opacity: 0.6; }
        }

        /* Main Content */
        .shop-container {
            padding: 8rem 3rem 4rem;
            max-width: 1500px;
            margin: 0 auto;
        }

        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, var(--neon-purple), var(--neon-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: var(--glow-effect);
            animation: titlePulse 2s infinite;
        }

        @keyframes titlePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .product-holo {
            position: relative;
            padding: 2rem;
            background: rgba(147, 112, 219, 0.03); /* Very subtle purple tint */
            border-radius: 1rem;
            border: 1px solid rgba(147, 112, 219, 0.2);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .product-holo:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: var(--glow-effect), 0 0 30px var(--card-hover);
            background: rgba(147, 112, 219, 0.08);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 0.8rem;
            filter: brightness(1.1);
            transition: transform 0.4s ease;
        }

        .product-holo:hover .product-image {
            transform: scale(1.05) rotate(2deg);
        }

        .product-name {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            margin: 1rem 0 0.5rem;
            color: var(--text-primary); /* Dark gray for readability */
        }

        .product-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--neon-cyan);
            text-shadow: var(--glow-effect);
            margin-bottom: 1rem;
        }

        .control-panel {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(147, 112, 219, 0.3); /* Soft purple */
            border: none;
            border-radius: 50%;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: var(--neon-purple);
            box-shadow: var(--glow-effect);
            transform: scale(1.1);
        }

        .quantity-display {
            width: 3rem;
            text-align: center;
            background: transparent;
            border: 1px solid rgba(147, 112, 219, 0.2);
            color: var(--neon-cyan);
            font-size: 1.2rem;
        }

        .add-to-cart {
            flex-grow: 1;
            padding: 0.8rem;
            background: linear-gradient(45deg, var(--neon-purple), var(--neon-cyan));
            border: none;
            border-radius: 2rem;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            transform: scale(1.05);
            box-shadow: var(--glow-effect);
            filter: brightness(1.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .shop-container {
                padding: 6rem 1.5rem 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .product-holo {
                padding: 1.5rem;
            }

            .product-image {
                height: 180px;
            }

            .product-price {
                font-size: 1.6rem;
            }

            .quantity-btn {
                width: 2rem;
                height: 2rem;
                font-size: 1rem;
            }

            .quantity-display {
                width: 2.5rem;
                font-size: 1rem;
            }

            .add-to-cart {
                padding: 0.6rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <?php include('header.php')?>
    <main class="shop-container">
        <h1 class="section-title">Geleceğin Ürünleri</h1>
        <div class="product-grid">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <article class="product-holo">
                        <img src="<?= base_url('images/' . $product['product_image']); ?>" 
                             alt="<?= esc($product['product_name']); ?>" 
                             class="product-image" 
                             loading="lazy">
                        <h2 class="product-name"><?= esc($product['product_name']); ?></h2>
                        <p class="product-price" id="price-<?= $product['id']; ?>">
                            <?= esc($product['product_price']); ?>₺
                        </p>
                        <div class="control-panel">
                            <div class="quantity-controls">
                                <button class="quantity-btn" onclick="adjustQuantity(<?= $product['id']; ?>, -1)">-</button>
                                <input type="text" class="quantity-display" 
                                       id="quantity-<?= $product['id']; ?>" 
                                       value="1" readonly>
                                <button class="quantity-btn" onclick="adjustQuantity(<?= $product['id']; ?>, 1)">+</button>
                            </div>
                            <form method="POST" action="<?= base_url('cart/addProduct'); ?>" class="cart-form">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?= esc($product['id']); ?>">
                                <input type="hidden" name="product_name" value="<?= esc($product['product_name']); ?>">
                                <input type="hidden" name="product_price" 
                                       value="<?= esc($product['product_price']); ?>" 
                                       id="hidden-price-<?= $product['id']; ?>">
                                <input type="hidden" name="quantity" 
                                       value="1" 
                                       id="hidden-quantity-<?= $product['id']; ?>">
                                <button type="submit" class="add-to-cart">Sepete Ekle</button>
                            </form>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align: center; font-size: 1.5rem; color: var(--neon-cyan);">
                    Şu anda ürün bulunmamaktadır.
                </p>
            <?php endif; ?>
        </div>
    </main>

    <script>
        function adjustQuantity(productId, change) {
            const quantityInput = document.getElementById(`quantity-${productId}`);
            const priceElement = document.getElementById(`price-${productId}`);
            const hiddenPrice = document.getElementById(`hidden-price-${productId}`);
            const hiddenQuantity = document.getElementById(`hidden-quantity-${productId}`);

            let quantity = parseInt(quantityInput.value) + change;
            if (quantity < 1) quantity = 1;

            const basePrice = parseFloat(hiddenPrice.value) / parseInt(hiddenQuantity.value);
            const newPrice = basePrice * quantity;

            quantityInput.value = quantity;
            priceElement.textContent = `${newPrice.toFixed(2)}₺`;
            hiddenPrice.value = newPrice.toFixed(2);
            hiddenQuantity.value = quantity;
        }

        // Basic voice command simulation (for demo)
        window.addEventListener('load', () => {
            if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
                const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
                recognition.lang = 'tr-TR';
                recognition.onresult = (event) => {
                    const command = event.results[0][0].transcript.toLowerCase();
                    if (command.includes('sepeti gör')) {
                        window.location.href = '<?php echo base_url('cart'); ?>';
                    }
                };
                recognition.onerror = () => console.log('Voice recognition failed');
                // Uncomment to enable: recognition.start();
            }
        });
    </script>
</body>
</html>