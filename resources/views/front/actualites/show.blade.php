@extends('layouts.front.guest')

@section('title', $article->title ?? 'Actualité')

@push('style')
<style>
    .article-detail-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #051b47 0%, #0b3272 100%);
        color: #fff;
        padding: 110px 0 80px;
        min-height: 330px;
    }

    .article-detail-hero::after {
        content: '';
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,.24);
        right: -150px;
        top: -80px;
        box-shadow: inset 0 0 0 2px rgba(255,255,255,.03);
    }

    .article-detail-hero__kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #a8d2ff;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .16em;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .article-detail-hero__kicker::before {
        content: '';
        width: 38px;
        height: 2px;
        background: #ffaa2b;
    }

    .article-detail-hero h1 {
        max-width: 840px;
        color: #fff;
        font-size: clamp(42px, 5vw, 60px);
        font-weight: 700;
        line-height: 1.18;
        margin: 0 0 20px;
    }

    .article-detail-hero__meta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 16px;
        color: #c8dbf8;
        font-size: 14px;
        font-weight: 600;
    }

    .article-detail-hero__meta span {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .article-detail-page {
        background: #eef3f8;
        padding: 50px 0 90px;
    }

    .article-detail-layout {
        display: grid;
        grid-template-columns: minmax(0, 2fr) minmax(280px, .9fr);
        gap: 30px;
        align-items: start;
    }

    .article-detail-card {
        background: #ffffff;
        border: 1px solid #dce7f3;
        border-radius: 20px;
        box-shadow: 0 24px 80px rgba(12, 54, 122, 0.08);
        overflow: hidden;
    }

    .article-detail-card__image {
        display: block;
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-bottom: 1px solid #e7eef7;
    }

    .article-detail-card__body {
        padding: 34px 42px 50px;
    }

    .article-detail-card__body .article-detail__intro {
        color: #193e77;
        font-size: 17px;
        font-weight: 700;
        line-height: 1.7;
        margin-bottom: 24px;
        padding-left: 16px;
        border-left: 3px solid #ffaa2b;
    }

    .article-detail-card__body .article-detail__content {
        color: #41566b;
        font-size: 17px;
        line-height: 1.85;
    }

    .article-detail-card__body .article-detail__content p {
        margin-bottom: 24px;
    }

    .article-detail-card__body .article-detail__content img {
        max-width: 100%;
        border-radius: 12px;
        margin: 12px 0 24px;
    }

    .article-aside {
        position: sticky;
        top: 24px;
        padding: 24px;
        border-radius: 20px;
        border: 1px solid #dce7f3;
        background: #fff;
        box-shadow: 0 10px 30px rgba(12, 54, 122, 0.06);
    }

    .article-aside__label {
        display: inline-block;
        color: #215ca6;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: .14em;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .article-aside__title {
        margin: 0 0 12px;
        color: #071f4d;
        font-size: 26px;
        font-weight: 700;
        line-height: 1.38;
    }

    .article-aside__category {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 14px;
        border-radius: 999px;
        background: #eef4fb;
        color: #1d569c;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .article-aside__summary {
        color: #526273;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 24px;
    }

    .article-aside__meta {
        border-top: 1px solid #dce7f3;
        padding-top: 18px;
        margin-top: 20px;
    }

    .article-aside__meta div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #eef4f8;
    }

    .article-aside__meta div:last-child {
        border-bottom: 0;
    }

    .article-aside__meta span {
        color: #5c718a;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .10em;
        text-transform: uppercase;
    }

    .article-aside__meta strong {
        color: #112a55;
        font-size: 13px;
    }

    .article-aside__share {
        display: flex;
        gap: 10px;
        margin-top: 22px;
    }

    .article-aside__share a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1px solid #c9d7ee;
        color: #173c78;
        text-decoration: none;
        transition: .25s ease;
    }

    .article-aside__share a:hover {
        background: #173c78;
        color: #fff;
    }

    @media (max-width: 991.98px) {
        .article-detail-layout {
            grid-template-columns: 1fr;
        }

        .article-aside {
            position: static;
        }

        .article-detail-card__image {
            height: 340px;
        }
    }

    @media (max-width: 767.98px) {
        .article-detail-card__body {
            padding: 24px 22px 34px;
        }

        .article-detail-card__image {
            height: 260px;
        }
    }
</style>
@endpush

@section('content')
    <section class="article-detail-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <span class="article-detail-hero__kicker">Actualité</span>
                    <h1>{{ $article->title }}</h1>
                    <div class="article-detail-hero__meta">
                        <span><i class="fa fa-calendar"></i>{{ optional($article->published_at)->format('d M Y') ?? now()->format('d M Y') }}</span>
                        <span><i class="fa fa-folder-open"></i>{{ optional($article->category)->name ?? 'Actualité' }}</span>
                        <span><i class="fa fa-eye"></i>{{ $article->views ?? 0 }} vues</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-detail-page">
        <div class="container">
            <div class="article-detail-layout">
                <article class="article-detail-card">
                    @if($article->getFirstMediaUrl('post_images'))
                        <img class="article-detail-card__image" src="{{ $article->getFirstMediaUrl('post_images') }}" alt="{{ $article->title }}">
                    @endif

                    <div class="article-detail-card__body">
                        @if($article->excerpt)
                            <p class="article-detail__intro">{{ $article->excerpt }}</p>
                        @endif

                        <div class="article-detail__content">
                            {!! $article->content !!}
                        </div>
                    </div>
                </article>

                <aside class="article-aside">
                    <span class="article-aside__label">Catégorie</span>
                    <div class="article-aside__category">{{ optional($article->category)->name ?? 'Actualité' }}</div>

                    <h2 class="article-aside__title">{{ $article->title }}</h2>

                    @if($article->short_description)
                        <p class="article-aside__summary">{{ $article->short_description }}</p>
                    @endif

                    <div class="article-aside__meta">
                        <div>
                            <span>Date</span>
                            <strong>{{ optional($article->published_at)->translatedFormat('d F Y') ?? now()->translatedFormat('d F Y') }}</strong>
                        </div>
                        <div>
                            <span>Lecture</span>
                            <strong>{{ max(3, (int) ceil(str_word_count(strip_tags($article->content)) / 180)) }} min</strong>
                        </div>
                        <div>
                            <span>Vues</span>
                            <strong>{{ $article->views ?? 0 }}</strong>
                        </div>
                    </div>

                    <div class="article-aside__share">
                        <a href="#" aria-label="Partager">f</a>
                        <a href="#" aria-label="Partager">in</a>
                        <a href="#" aria-label="Partager">↗</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush