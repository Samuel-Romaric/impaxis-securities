<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Tableau de bord') — Impaxis</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
	<style>
		:root {
			--sidebar-width: 300px;
			--topbar-height: 110px;
			--ink: #292929;
			--muted: #6b7c95;
			--line: #dce3ec;
			--canvas: #f4f7fb;
			--orange: #fb9708;
		}

		* { box-sizing: border-box; }
		/* body { margin: 0; background: var(--canvas); color: var(--ink); font-family: Arial, Helvetica, sans-serif; } */
		body { margin: 0; background: var(--canvas); color: var(--ink); font-family: Helvetica, sans-serif; }
		.back-sidebar { position: fixed; inset: 0 auto 0 0; z-index: 1030; width: var(--sidebar-width); background: linear-gradient(180deg, #242424 0%, #131313 100%); color: #d5d5d5; overflow-y: auto; }
		.back-brand { height: 91px; padding: 25px 27px; border-bottom: 1px solid rgba(255,255,255,.08); }
		.back-brand img { width: 208px; height: 42px; object-fit: contain; object-position: left center; filter: brightness(0) invert(1); }
		.back-brand-text { color: #fff; font-size: 25px; font-weight: 700; letter-spacing: 3px; }
		.back-nav { padding: 28px 16px; }
		.back-nav-label { margin: 15px 16px 18px; color: #858585; font-size: 14px; letter-spacing: 1px; }
		.back-nav-link { display: flex; align-items: center; gap: 17px; min-height: 64px; padding: 0 18px; color: #d1d1d1; text-decoration: none; font-size: 19px; border-radius: 15px; transition: background .15s ease, color .15s ease; }
		.back-nav-link:hover { color: #fff; background: rgba(255,255,255,.08); }
		.back-nav-link.active { color: #fff; background: var(--orange); font-weight: 700; }
		.back-nav-link i { width: 22px; text-align: center; font-size: 20px; }
		.back-nav-bottom { position: absolute; right: 16px; bottom: 16px; left: 16px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,.1); }
		.back-main { min-height: 100vh; margin-left: var(--sidebar-width); padding-top: var(--topbar-height); }
		.back-topbar { position: fixed; top: 0; right: 0; left: var(--sidebar-width); z-index: 1020; min-height: var(--topbar-height); padding: 20px 32px; background: #fff; border-bottom: 1px solid var(--line); }
		.back-topbar h1 { margin: 0; font-size: 20px; font-weight: 700; }
		.back-topbar p { margin: 8px 0 0; color: var(--muted); font-size: 18px; }
		.back-account { display: flex; align-items: center; gap: 14px; padding: 8px 18px 8px 9px; border: 1px solid var(--line); border-radius: 36px; }
		.back-account-avatar { display: grid; width: 45px; height: 45px; place-items: center; border-radius: 50%; background: #292929; color: #fff; font-size: 20px; font-weight: 700; }
		.back-account strong { display: block; font-size: 16px; }
		.back-account small { color: var(--muted); font-size: 14px; }
		.back-content { padding: 32px; }
		.back-panel { background: #fff; border: 1px solid var(--line); border-radius: 20px; }
		.back-panel-header { display: flex; align-items: center; justify-content: space-between; padding: 22px 26px; border-bottom: 1px solid var(--line); }
		.back-panel-header h2 { margin: 0; font-size: 22px; }
		.back-stat { height: 100%; padding: 22px; border-left: 4px solid var(--orange); border-radius: 12px; background: #fff; box-shadow: 0 3px 12px rgba(35,55,80,.05); }
		.back-stat-label { color: var(--muted); font-size: 14px; }
		.back-stat-value { margin-top: 9px; font-size: 32px; font-weight: 700; }
		.back-stat-note { color: var(--muted); font-size: 13px; }
		.btn-back-orange { padding: 14px 23px; color: #fff; background: var(--orange); border: 0; border-radius: 10px; font-size: 17px; font-weight: 700; }
		.btn-back-orange:hover { color: #fff; background: #e98900; }
		.back-table { margin: 0; }
		.back-table th { padding: 17px 12px; color: var(--muted); background: #f7f9fb; font-size: 13px; letter-spacing: .4px; }
		.back-table td { padding: 18px 12px; border-color: var(--line); vertical-align: middle; }
		.back-table th:first-child, .back-table td:first-child { padding-left: 26px; }
		.badge-back-fr { color: #e67813; background: #fff1df; }
		.badge-back-published { color: #087f5b; background: #e2f6ef; }
		.back-action { color: #64758d; border: 1px solid #9aa9bc; border-radius: 6px; font-weight: 700; }
		.back-action:hover { color: #fff; background: #64758d; }
		@media (max-width: 992px) {
			:root { --sidebar-width: 80px; }
			.back-brand { padding: 24px 18px; }
			.back-brand img { width: 44px; object-fit: cover; object-position: left; }
			.back-nav-label, .back-nav-link span, .back-account > div:last-child { display: none; }
			.back-nav-link { justify-content: center; padding: 0; }
			.back-topbar { padding: 18px 20px; }
			.back-topbar h1 { font-size: 22px; }
			.back-topbar p { font-size: 14px; }
			.back-content { padding: 20px; }
		}
		@media (max-width: 575px) {
			:root { --sidebar-width: 0px; --topbar-height: 92px; }
			.back-sidebar { display: none; }
			.back-topbar { left: 0; }
			.back-account { padding: 5px; border: 0; }
			.back-account-avatar { width: 38px; height: 38px; }
			.back-topbar p { display: none; }
			.back-panel-header { align-items: flex-start; gap: 12px; }
		}
	</style>
</head>
<body>
	<aside class="back-sidebar">
		<div class="back-brand">
			<img src="{{ asset('front/assets/images/logo-impaxis.png') }}" alt="Impaxis">
			{{-- <span class="back-brand-text d-none">IMPAXIS</span> --}}
		</div>
		<nav class="back-nav">
			<div class="back-nav-label">VUE D'ENSEMBLE</div>
			<a class="back-nav-link active" href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-gauge-high"></i><span>Tableau de bord</span></a>
			<div class="back-nav-label mt-4">CONTENU DU SITE</div>
			<a class="back-nav-link" href="#"><i class="fa-regular fa-newspaper"></i><span>Articles</span></a>
			<a class="back-nav-link" href="#"><i class="fa-solid fa-user-group"></i><span>Équipe</span></a>
			<div class="back-nav-label mt-4">ADMINISTRATION</div>
			<a class="back-nav-link" href="#"><i class="fa-solid fa-shield-halved"></i><span>Utilisateurs</span></a>
			<a class="back-nav-link" href="#"><i class="fa-solid fa-gear"></i><span>Mon compte</span></a>
		</nav>
		<div class="back-nav-bottom">
			<a class="back-nav-link" href="{{ url('/') }}"><i class="fa-solid fa-arrow-up-right-from-square"></i><span>Voir le site</span></a>
		</div>
	</aside>

	<header class="back-topbar d-flex align-items-center justify-content-between">
		<div>
			<h1>@yield('page-title', 'Tableau de bord')</h1>
			<p>@yield('page-subtitle', "Vue d'ensemble du site vitrine Impaxis")</p>
		</div>
		<div class="back-account">
			<div class="back-account-avatar">A</div>
			<div><strong>{{ auth()->user()->name ?? 'Admin' }}</strong><small>{{ auth()->user()->email ?? 'admin@gmail.com' }}</small></div>
		</div>
	</header>

	<main class="back-main">
		<div class="back-content">@yield('content')</div>
	</main>
</body>
</html>
