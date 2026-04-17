<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas Shopee | Vitrine de Afiliado</title>
    <meta name="description" content="Vitrine com ofertas selecionadas da Shopee. Compare produtos e acesse o anúncio oficial para comprar com segurança.">
    <style>
        :root {
            --bg: #f8fafc;
            --ink: #0f172a;
            --muted: #475569;
            --brand: #f97316;
            --brand-dark: #ea580c;
            --card: #ffffff;
            --line: #e2e8f0;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--bg);
            color: var(--ink);
        }

        .wrapper {
            width: min(1100px, 92%);
            margin: 0 auto;
        }

        .hero {
            padding: 72px 0 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: clamp(1.9rem, 3vw, 3rem);
            line-height: 1.1;
            margin: 0;
        }

        .hero p {
            color: var(--muted);
            font-size: 1.1rem;
            margin: 1rem auto 0;
            max-width: 720px;
        }

        .disclaimer {
            margin-top: 16px;
            color: #64748b;
            font-size: 0.92rem;
        }

        .catalog {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 18px;
            padding: 10px 0 52px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .card-content {
            padding: 16px;
            display: flex;
            flex: 1;
            flex-direction: column;
            gap: 10px;
        }

        .badge {
            width: fit-content;
            background: #fff7ed;
            color: var(--brand-dark);
            border-radius: 999px;
            padding: 6px 10px;
            font-size: 0.78rem;
            font-weight: 600;
        }

        .title {
            margin: 0;
            font-size: 1.1rem;
        }

        .description {
            margin: 0;
            color: var(--muted);
            line-height: 1.45;
            flex: 1;
        }

        .price {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            text-align: center;
            background: var(--brand);
            color: #fff;
            padding: 11px 14px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn:hover {
            background: var(--brand-dark);
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 20px 0 30px;
            color: #64748b;
            text-align: center;
        }
    </style>
</head>
<body>
    <main class="wrapper">
        <section class="hero">
            <h1>Vitrine de Ofertas da Shopee</h1>
            <p>
                Encontre produtos selecionados com ótimo custo-benefício e acesse o anúncio oficial da Shopee para finalizar a compra.
            </p>
            <p class="disclaimer">
                Transparência: este site participa do programa de afiliados e pode receber comissão por compras qualificadas.
            </p>
        </section>

        <section class="catalog">
            @foreach($products as $product)
                <article class="card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}">

                    <div class="card-content">
                        <span class="badge">{{ $product['category'] }}</span>
                        <h2 class="title">{{ $product['title'] }}</h2>
                        <p class="description">{{ $product['description'] }}</p>
                        <p class="price">{{ $product['price'] }}</p>

                        <a class="btn" href="{{ $product['affiliate_url'] }}" target="_blank" rel="nofollow sponsored noopener">
                            Ver na Shopee
                        </a>
                    </div>
                </article>
            @endforeach
        </section>
    </main>

    <footer>
        <div class="wrapper">© {{ date('Y') }} Vitrine de Ofertas • Feito para afiliados Shopee</div>
    </footer>
</body>
</html>
