# Analisis Issue untuk Branch `fitur/opensid-87-tambahkan-atribut-loading-lazy-pada-gambar-widget`

> File ini dibuat otomatis oleh `opensid-tools/issue-tool.js` sebagai konteks kerja
> untuk agent/AI yang melanjutkan pengerjaan branch ini. Boleh dihapus/diedit bebas,
> dan sebaiknya dihapus sebelum PR di-merge kalau isinya sudah tidak relevan.

## Metadata Issue

- Repo asal: `andifahruddinakas/OpenSID` (key: `opensid`)
- Nomor issue: #87
- URL: https://github.com/andifahruddinakas/OpenSID/issues/87
- Label: Fitur
- Tipe pengerjaan: **fitur**
- Branch: `fitur/opensid-87-tambahkan-atribut-loading-lazy-pada-gambar-widget`
- Target base PR: `rilis-dev` (repo kerja: `andifahruddinakas/OpenSID`)

## Deskripsi Asli Issue

### Deskripsi

Widget `sinergi_program.php` menampilkan banyak gambar sponsor/program sekaligus tanpa lazy loading, yang bisa memperlambat waktu muat halaman awal kalau gambarnya banyak.

### Lokasi

- `donjo-app/views/widgets/sinergi_program.php`

### Yang diharapkan

Tambahkan atribut `loading="lazy"` pada tag `<img>` di widget ini supaya gambar yang belum terlihat di viewport tidak langsung dimuat, meningkatkan performa halaman.

---
_Issue ini dibuat untuk menguji alur otomasi issue-tool.js pada label 'Fitur' (branch dari rilis-dev)._

## Catatan untuk Agent/AI

- Ini adalah permintaan **fitur baru**. Pastikan desain/pendekatan sudah didiskusikan di issue sebelum implementasi besar.
- Telusuri kode yang relevan di repo `andifahruddinakas/OpenSID` sebelum mengubah apa pun; jangan berasumsi struktur file dari judul issue saja.
- Ikuti [aturan penulisan script OpenSID](https://github.com/OpenSID/OpenSID/wiki/Aturan-Penulisan-Script).
- PR dibuat langsung sebagai **ready for review** (bukan draft), jadi segera implementasikan perbaikannya lalu lengkapi deskripsi PR (langkah reproduksi, screenshot, checklist) di GitHub — PR sudah dibuat otomatis dari template repo.
- File ini murni catatan kerja, bukan bagian dari fitur/produk — jangan ikut dianggap sebagai requirement fungsional.
