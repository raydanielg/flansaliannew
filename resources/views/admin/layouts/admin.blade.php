<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - Fransalian School</title>
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @if(app()->environment('production'))
        <link rel="stylesheet" href="{{ asset('build/assets/app-070655a4.css') }}">
        <script src="{{ asset('build/assets/app-8d1dc501.js') }}" defer></script>
    @else
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endif
    <style>
        :root {
            --primary-blue: #003366;
            --secondary-blue: #0056b3;
            --accent-gold: #c9a227;
            --light-bg: #f4f7f6;
            --sidebar-width: 260px;
            --sidebar-dark: #001a33;
            --card-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Nunito', sans-serif;
            background: var(--light-bg);
            color: #333;
        }

        /* Sidebar */
        .admin-sidebar {
            position: fixed;
            left: 0; top: 0; bottom: 0;
            width: var(--sidebar-width);
            background: var(--sidebar-dark);
            color: #fff;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }
        .sidebar-brand {
            padding: 24px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .sidebar-brand img {
            width: 42px; height: 42px;
            border-radius: 8px;
            object-fit: cover;
        }
        .sidebar-brand h4 {
            font-weight: 700; font-size: 1rem;
            margin: 0; color: #fff;
            line-height: 1.2;
        }
        .sidebar-brand small {
            font-size: 0.7rem; opacity: 0.6;
            display: block;
        }
        .sidebar-menu {
            flex: 1;
            padding: 16px 12px;
            overflow-y: auto;
        }
        .menu-label {
            font-size: 0.65rem; text-transform: uppercase;
            letter-spacing: 1px; opacity: 0.5;
            padding: 0 12px; margin: 16px 0 8px;
        }
        .menu-item {
            display: flex; align-items: center;
            gap: 12px; padding: 10px 14px;
            border-radius: 8px; color: rgba(255,255,255,0.7);
            text-decoration: none; font-size: 0.88rem;
            font-weight: 600; transition: all 0.2s;
            margin-bottom: 4px;
        }
        .menu-item:hover, .menu-item.active {
            background: var(--primary-blue);
            color: #fff;
        }
        .menu-item i { font-size: 1.1rem; width: 22px; text-align: center; }
        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }
        .admin-profile {
            display: flex; align-items: center; gap: 10px;
        }
        .admin-avatar {
            width: 38px; height: 38px; border-radius: 50%;
            background: var(--accent-gold);
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.85rem; color: var(--sidebar-dark);
        }
        .admin-info { flex: 1; }
        .admin-info span { display: block; font-size: 0.8rem; font-weight: 700; }
        .admin-info small { font-size: 0.65rem; opacity: 0.6; }

        /* Topbar */
        .admin-main {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }
        .admin-topbar {
            background: #fff;
            padding: 14px 28px;
            display: flex; align-items: center; justify-content: space-between;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
            position: sticky; top: 0; z-index: 100;
        }
        .topbar-left { display: flex; align-items: center; gap: 12px; }
        .topbar-left h2 { font-size: 1.15rem; font-weight: 700; color: var(--primary-blue); margin: 0; }
        .topbar-right { display: flex; align-items: center; gap: 14px; }
        .topbar-btn {
            width: 38px; height: 38px; border-radius: 10px;
            background: var(--light-bg); border: none;
            display: flex; align-items: center; justify-content: center;
            color: #555; cursor: pointer; transition: all 0.2s;
            text-decoration: none;
        }
        .topbar-btn:hover { background: var(--primary-blue); color: #fff; }

        /* Content */
        .admin-content { padding: 28px; }

        /* Stats Cards */
        .stat-card {
            background: #fff; border-radius: 14px;
            padding: 22px; box-shadow: var(--card-shadow);
            display: flex; align-items: center; gap: 16px;
            transition: transform 0.2s;
        }
        .stat-card:hover { transform: translateY(-3px); }
        .stat-icon {
            width: 52px; height: 52px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem; color: #fff;
        }
        .stat-icon.blue { background: var(--primary-blue); }
        .stat-icon.green { background: #198754; }
        .stat-icon.orange { background: #fd7e14; }
        .stat-icon.purple { background: #6f42c1; }
        .stat-icon.red { background: #dc3545; }
        .stat-details h3 { font-size: 1.5rem; font-weight: 800; margin: 0; color: var(--primary-blue); }
        .stat-details p { font-size: 0.8rem; color: #888; margin: 0; font-weight: 600; }

        /* Tables */
        .admin-card {
            background: #fff; border-radius: 14px;
            box-shadow: var(--card-shadow); overflow: hidden;
        }
        .admin-card-header {
            padding: 18px 22px;
            border-bottom: 1px solid #f0f0f0;
            display: flex; align-items: center; justify-content: space-between;
        }
        .admin-card-header h5 { font-weight: 700; color: var(--primary-blue); margin: 0; font-size: 0.95rem; }
        .admin-card-body { padding: 0; }
        .admin-table { width: 100%; margin: 0; }
        .admin-table thead th {
            background: var(--light-bg); color: #666;
            font-size: 0.75rem; text-transform: uppercase;
            letter-spacing: 0.5px; font-weight: 700;
            padding: 12px 22px; border: none;
        }
        .admin-table tbody td {
            padding: 14px 22px; font-size: 0.85rem;
            color: #555; border-bottom: 1px solid #f5f5f5;
            vertical-align: middle;
        }
        .admin-table tbody tr:last-child td { border-bottom: none; }
        .status-badge {
            padding: 4px 10px; border-radius: 20px;
            font-size: 0.7rem; font-weight: 700;
        }
        .status-pending { background: #fff3cd; color: #856404; }
        .status-approved { background: #d4edda; color: #155724; }
        .status-rejected { background: #f8d7da; color: #721c24; }

        /* Toast Notifications */
        .toast-container { position: fixed; top: 20px; right: 20px; z-index: 9999; }
        .custom-toast {
            background: #fff; border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            padding: 16px 20px; min-width: 320px;
            display: flex; align-items: center; gap: 12px;
            margin-bottom: 12px; animation: slideInRight 0.4s ease;
            border-left: 4px solid;
        }
        .custom-toast.success { border-left-color: #198754; }
        .custom-toast.error { border-left-color: #dc3545; }
        .custom-toast.warning { border-left-color: #fd7e14; }
        .custom-toast .toast-icon { font-size: 1.3rem; }
        .custom-toast.success .toast-icon { color: #198754; }
        .custom-toast.error .toast-icon { color: #dc3545; }
        .custom-toast.warning .toast-icon { color: #fd7e14; }
        .custom-toast .toast-body { flex: 1; }
        .custom-toast .toast-title { font-weight: 700; font-size: 0.9rem; margin-bottom: 2px; }
        .custom-toast .toast-msg { font-size: 0.8rem; color: #666; }
        .custom-toast .toast-close {
            background: none; border: none; color: #999; cursor: pointer;
            font-size: 1.1rem; padding: 0; width: 24px; height: 24px;
            display: flex; align-items: center; justify-content: center;
        }
        .custom-toast .toast-close:hover { color: #333; }
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        .toast-exit { animation: slideOutRight 0.3s ease forwards; }

        /* Mobile */
        @media (max-width: 768px) {
            .admin-sidebar { transform: translateX(-100%); }
            .admin-main { margin-left: 0; }
            .admin-content { padding: 16px; }
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="admin-sidebar animate__animated animate__fadeInLeft">
        <div class="sidebar-brand">
            <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="Logo">
            <div>
                <h4>Fransalian Admin</h4>
                <small>School Management</small>
            </div>
        </div>

        <div class="sidebar-menu">
            <div class="menu-label">Main</div>
            <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.applications') }}" class="menu-item {{ request()->routeIs('admin.applications') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-text"></i> Applications
            </a>
            <a href="{{ route('admin.users') }}" class="menu-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Users
            </a>

            <div class="menu-label">Content</div>
            <a href="{{ route('admin.fees') }}" class="menu-item {{ request()->routeIs('admin.fees') ? 'active' : '' }}">
                <i class="bi bi-cash-stack"></i> Fees
            </a>
            <a href="{{ route('admin.news') }}" class="menu-item {{ request()->routeIs('admin.news') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> News
            </a>
            <a href="{{ route('admin.helpdesk') }}" class="menu-item {{ request()->routeIs('admin.helpdesk') ? 'active' : '' }}">
                <i class="bi bi-question-circle"></i> Help Desk
            </a>
            <a href="{{ route('admin.feedback') }}" class="menu-item {{ request()->routeIs('admin.feedback') ? 'active' : '' }}">
                <i class="bi bi-chat-left-text"></i> Feedback
            </a>
            <a href="{{ route('admin.gallery') }}" class="menu-item {{ request()->routeIs('admin.gallery') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Gallery
            </a>

            <div class="menu-label">System</div>
            <a href="{{ route('admin.settings') }}" class="menu-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> Settings
            </a>
            <a href="{{ route('admin.logout') }}" class="menu-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <div class="sidebar-footer">
            <div class="admin-profile">
                <div class="admin-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
                <div class="admin-info">
                    <span>{{ auth()->user()->name }}</span>
                    <small>{{ auth()->user()->email }}</small>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-main">
        <div class="admin-topbar">
            <div class="topbar-left">
                <h2>@yield('page-title', 'Dashboard')</h2>
            </div>
            <div class="topbar-right">
                <a href="{{ url('/') }}" class="topbar-btn" title="Visit Website">
                    <i class="bi bi-globe"></i>
                </a>
                <a href="{{ route('admin.logout') }}" class="topbar-btn" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="admin-content">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                    <i class="bi bi-x-circle-fill me-2"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>

    <!-- Toast Container -->
    <div class="toast-container" id="toastContainer"></div>

    <script>
    function showToast(type, title, message) {
        const container = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.className = 'custom-toast ' + type;
        const iconMap = { success: 'bi-check-circle-fill', error: 'bi-x-circle-fill', warning: 'bi-exclamation-triangle-fill' };
        toast.innerHTML = `
            <i class="bi ${iconMap[type] || 'bi-info-circle'} toast-icon"></i>
            <div class="toast-body">
                <div class="toast-title">${title}</div>
                <div class="toast-msg">${message}</div>
            </div>
            <button class="toast-close" onclick="this.parentElement.remove()">&times;</button>
        `;
        container.appendChild(toast);
        setTimeout(() => { toast.classList.add('toast-exit'); setTimeout(() => toast.remove(), 300); }, 4000);
    }
    @if(session('success')) showToast('success', 'Success', '{{ session('success') }}');
    @endif
    @if(session('error')) showToast('error', 'Error', '{{ session('error') }}');
    @endif
    </script>
    @yield('scripts')
</body>
</html>
