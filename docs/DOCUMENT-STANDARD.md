# PRD STUDIO — DOCUMENT STANDARD

**Version:** 1.1  
**Status:** CONFIRMED  
**Purpose:** Universal Project Documentation Standard

---

## 1. DOCUMENTATION PRINCIPLES

Setiap proyek harus memenuhi prinsip berikut:

1. Business requirements menentukan solusi teknis.
2. Tidak mengunci teknologi sebelum analisis kebutuhan.
3. Setiap keputusan memiliki status.
4. Dokumen saling terhubung dan konsisten.
5. Tidak mengarang kebutuhan atau keputusan.
6. Dokumen harus dapat dipahami developer dan AI coding agent.
7. Dokumen harus dapat diperbarui mengikuti perubahan proyek.

Decision status:

- CONFIRMED
- PROPOSED
- PENDING
- NOT APPLICABLE

## 2. CORE DOCUMENTATION

| No. | File | Purpose |
| --- | --- | --- |
| 01 | BRIEF.md | Konteks dan tujuan proyek |
| 02 | PRD.md | Product requirements |
| 03 | SITEMAP.md | Struktur halaman dan navigasi |
| 04 | UI-UX.md | Visual direction dan user experience |
| 05 | DATABASE.md | Entitas, atribut, dan relasi data |
| 06 | ARCHITECTURE.md | Arsitektur sistem |
| 07 | TECH-STACK.md | Teknologi dan tools |
| 08 | COMPONENTS.md | Komponen dan tanggung jawab |
| 09 | API.md | Endpoint dan integrasi |
| 10 | SECURITY.md | Keamanan dan akses |
| 11 | TESTING.md | Strategi pengujian |
| 12 | GIT-WORKFLOW.md | Strategi version control |
| 13 | DEPLOYMENT.md | Build dan deployment |
| 14 | MAINTENANCE.md | Backup dan pemeliharaan |

Dokumen yang tidak relevan harus diberi status NOT APPLICABLE beserta alasan.

## 3. DEVELOPMENT SUPPORT FILES

Setiap proyek juga harus mempertimbangkan file berikut:

| File | Requirement | Purpose |
| --- | --- | --- |
| AGENTS.md | Required | Instruksi untuk AI coding agents |
| .gitignore | Required | Mengabaikan file yang tidak perlu masuk repository |
| README.md | Required | Informasi dan panduan proyek |
| .gitattributes | Conditional | Konsistensi perilaku file Git |

### AGENTS.md

Harus berisi:

- Project overview
- Technology stack
- Project structure
- Coding standards
- Naming conventions
- Architecture constraints
- Development workflow
- Testing requirements
- Security rules
- Prohibited practices
- Documentation references

Instruksi harus sesuai teknologi yang dipilih. Jangan mengasumsikan semua coding agent menggunakan format konfigurasi yang sama.

### .gitignore

Harus disesuaikan dengan:

- Bahasa pemrograman
- Framework
- Build tools
- IDE
- Operating system
- Environment variables
- Dependencies
- Temporary files
- Generated files
- Sensitive files

Jangan menggunakan template universal secara membabi buta.

### README.md

Minimal mencakup:

- Project name
- Project description
- Main features
- Technology stack
- Requirements
- Installation
- Development commands
- Testing
- Build
- Deployment reference
- Documentation index

### .gitattributes

Dibuat jika diperlukan untuk:

- Line endings
- Binary files
- File normalization
- Diff behavior
- Git export behavior

## 4. GIT CONFIGURATION STANDARD

Setiap proyek harus memiliki Git setup yang sesuai.

Tahapan:

1. Periksa apakah folder proyek sudah menjadi Git repository.
2. Periksa konfigurasi dan status Git.
3. Buat atau perbarui `.gitignore`.
4. Buat `.gitattributes` jika diperlukan.
5. Tentukan branch strategy.
6. Tentukan commit convention.
7. Inisialisasi repository jika belum tersedia.
8. Buat initial commit setelah review.
9. Hubungkan remote repository.
10. Push setelah pengguna menyetujui tindakan tersebut.

Jangan menghapus atau menimpa repository yang sudah ada tanpa persetujuan.

Jangan memasukkan credentials, secrets, API keys, atau file environment sensitif ke repository.

## 5. BRANCH AND COMMIT CONVENTION

Gunakan pendekatan yang proporsional dengan ukuran proyek.

Default branch:

- main

Contoh branch:

- feature/nama-fitur
- fix/nama-perbaikan
- docs/nama-dokumentasi

Contoh commit:

- feat: add product catalog
- fix: resolve mobile navigation issue
- docs: update project requirements
- refactor: simplify header component
- test: add authentication tests

Konvensi ini dapat disesuaikan dengan workflow tim.

## 6. DOCUMENTATION VALIDATION

Sebelum development handover, validasi:

- Semua dokumen wajib tersedia.
- Dokumen relevan memiliki isi yang memadai.
- Dokumen tidak saling bertentangan.
- Requirements memiliki acceptance criteria.
- Database sesuai kebutuhan fitur.
- Architecture sesuai kebutuhan proyek.
- Security sesuai risiko.
- Testing mencakup kebutuhan utama.
- AGENTS.md sesuai teknologi dan struktur proyek.
- .gitignore sesuai stack.
- README.md dapat digunakan sebagai panduan awal.

## 7. FINAL HANDOVER

Hasil akhir harus mencakup:

1. Dokumentasi proyek dalam Markdown.
2. File pendukung development.
3. Git configuration.
4. AI coding agent instructions.
5. Validasi dokumentasi.
6. Panduan menjalankan proyek.
7. Development handover report.

Output akhir dapat disediakan sebagai folder proyek atau ZIP jika kemampuan file tersedia.

GitHub atau remote repository hanya boleh dinyatakan sudah terhubung setelah konfigurasi dan push benar-benar berhasil diverifikasi.

---

**END OF DOCUMENT STANDARD**
