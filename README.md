
# AI UNMUL

Proyek ini menggunakan Laravel dan Livewire untuk membangun aplikasi web organisasi/himpunan Informatika, Fakultas Teknik, Universitas Mulawarman (UNMUL).

## Cara Install Laravel Livewire

1. Pastikan sudah menginstall Composer dan PHP di komputer.
2. Buka terminal di folder proyek Laravel (`ai-unmul`).
3. Jalankan perintah berikut untuk menginstall Livewire:
	```bash
	composer require livewire/livewire
	```
4. Tambahkan tag Livewire di file Blade (misal: `resources/views/welcome.blade.php`):
	```blade
	@livewireStyles
	...
	@livewireScripts
	```
5. Buat komponen Livewire:
	```bash
	php artisan make:livewire NamaKomponen
	```
6. Gunakan komponen di file Blade:
	```blade
	<livewire:nama-komponen />
	```

## Tahapan Memulai Kontribusi

1. Fork repository di GitHub: [ai-unmul](https://github.com/ISL-Techno/ai-unmul)
2. Clone hasil fork ke komputer:
	```bash
	git clone https://github.com/<username>/ai-unmul.git
	```
3. Buat branch baru untuk fitur/bugfix:
	```bash
	git checkout -b nama-fitur
	```
4. Lakukan perubahan kode.
5. Commit dan push ke branch:
	```bash
	git add .
	git commit -m "Deskripsi perubahan"
	git push origin nama-fitur
	```
6. Buat Pull Request ke repository utama.

## License

Proyek ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
