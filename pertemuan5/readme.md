# PEMWEB Laravel Project

Proyek ini adalah aplikasi Laravel yang dikembangkan dalam konteks perkuliahan Pemrograman Web. Aplikasi menggunakan **Filament Admin Panel** dengan panel khusus bernama `jualan`, serta dikembangkan di lingkungan **Docker**.

---

## 🧱 Fitur Proyek

- Laravel 10 (atau versi sesuai konfigurasi)
- Filament Admin Panel
- Panel kustom: `jualan`
- Penggunaan Docker
- Artisan command untuk manajemen
- Route caching diaktifkan

---

## 📦 Struktur Panel Filament

Panel baru bernama `jualan` telah dibuat menggunakan perintah:

```bash
php artisan make:filament-panel jualan
bash```
---
tambahkan login() pada app/provider/filament/panelyangdibuatPanelProvider.php
->id('jualan')
            ->path('jualan')
            ->login()
