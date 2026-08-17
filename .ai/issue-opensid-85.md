# Analisis Issue untuk Branch `bugfix/opensid-85-pindahkan-inline-css-di-widget-sinergi-program-php`

> File ini dibuat otomatis oleh `opensid-tools/issue-tool.js` sebagai konteks kerja
> untuk agent/AI yang melanjutkan pengerjaan branch ini. Boleh dihapus/diedit bebas,
> dan sebaiknya dihapus sebelum PR di-merge kalau isinya sudah tidak relevan.

## Metadata Issue

- Repo asal: `andifahruddinakas/OpenSID` (key: `opensid`)
- Nomor issue: #85
- URL: https://github.com/andifahruddinakas/OpenSID/issues/85
- Label: enhancement
- Tipe pengerjaan: **bugfix**
- Branch: `bugfix/opensid-85-pindahkan-inline-css-di-widget-sinergi-program-php`
- Target base PR: `bug-fix` (repo kerja: `andifahruddinakas/OpenSID`)

## Deskripsi Asli Issue

### Deskripsi

Widget `sinergi_program.php` punya blok `<style>` inline langsung di file view-nya, dengan komentar TODO yang belum dikerjakan:

```
donjo-app/views/widgets/sinergi_program.php:2
<!-- TODO: Pindahkan ke external css -->
```

CSS inline ini (baris 3-36) sebaiknya dipindah ke file `.css` terpisah supaya lebih mudah di-cache oleh browser dan konsisten dengan widget lain yang sudah pakai file CSS eksternal.

### Lokasi

- `donjo-app/views/widgets/sinergi_program.php` baris 1-36

### Yang diharapkan

- Buat file CSS eksternal (mis. di `donjo-app/assets/css/` atau lokasi aset widget yang sesuai konvensi proyek) berisi style untuk `#sinergi_program`.
- Include file CSS tsb dari widget, hapus blok `<style>` inline dan komentar TODO-nya.
- Pastikan tampilan widget (termasuk efek hover gambar) tidak berubah.

---
_Issue ini dibuat untuk menguji alur otomasi issue-tool.js pada task koding nyata (bukan sekadar dokumentasi)._

## Catatan untuk Agent/AI

- Ini adalah **perbaikan bug/teknis**. Cari dulu root cause di kode sebelum menambal gejalanya saja.
- Telusuri kode yang relevan di repo `andifahruddinakas/OpenSID` sebelum mengubah apa pun; jangan berasumsi struktur file dari judul issue saja.
- Ikuti [aturan penulisan script OpenSID](https://github.com/OpenSID/OpenSID/wiki/Aturan-Penulisan-Script).
- PR dibuat langsung sebagai **ready for review** (bukan draft), jadi segera implementasikan perbaikannya lalu lengkapi deskripsi PR (langkah reproduksi, screenshot, checklist) di GitHub — PR sudah dibuat otomatis dari template repo.
- File ini murni catatan kerja, bukan bagian dari fitur/produk — jangan ikut dianggap sebagai requirement fungsional.
