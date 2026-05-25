# Tugas Laravel Pertemuan 10  
## Migration, Seeder, Accessor & Scope Laravel

### Identitas Mahasiswa
- **Nama:** Dwinta Vivian Acintya Syahda  
- **NIM:** 60324053  
- **Mata Kuliah:** Pemrograman Web II  

---

# Deskripsi Tugas

Project ini dibuat untuk memenuhi tugas Pemrograman Web II mengenai implementasi:

- Migration
- Seeder
- Model
- Accessor
- Scope
- Route Testing

menggunakan framework Laravel.

---

# Fitur yang Dikerjakan

## 1. Migration Tabel Kategori
Membuat tabel kategori untuk normalisasi data buku.

### Struktur Tabel
- id
- nama_kategori
- deskripsi
- icon
- warna
- timestamps

---

## 2. Seeder Kategori
Data kategori yang ditambahkan:

- Programming
- Database
- Web Design
- Networking
- Data Science

---

## 3. Model Buku
Accessor:
- status_stok_badge
- tahun_label

Scope:
- stokMenipis()
- hargaRange()
- terbaru()

---

## 4. Model Anggota
Accessor:
- status_badge
- kategori_usia

Scope:
- jenisKelamin()
- terdaftarBulanIni()

---

# Route Testing

Route testing dibuat pada:

```bash
/test-accessor-scope
```

Route digunakan untuk menampilkan hasil accessor dan scope secara langsung.

---


# Screenshot

## 1. Migration Berhasil
<img width="724" height="241" alt="migration 1" src="https://github.com/user-attachments/assets/44288957-a033-45cc-bba3-c2ce9b137e66" />

---

## 2. Seeder Berhasil
<img width="471" height="67" alt="seder berhasil 2" src="https://github.com/user-attachments/assets/a798f60a-25b7-4c8b-adba-4a6fe184b7dc" />

---

## 3. Database Tabel Kategori
<img width="923" height="438" alt="tabel kategori 3" src="https://github.com/user-attachments/assets/82b85a91-ee45-4729-8a78-eb7ec2240fdd" />

---

## 4. Testing Accessor Buku
<img width="925" height="418" alt="testing buku 5" src="https://github.com/user-attachments/assets/3ea869c3-539b-4109-964b-101d7f526744" />
<img width="924" height="76" alt="testing buku 5 2" src="https://github.com/user-attachments/assets/fb7aa068-c1f1-4686-9722-a9f48c745e97" />

---

## 5. Testing Accessor Anggota
<img width="960" height="331" alt="testing anggota" src="https://github.com/user-attachments/assets/e66c6c56-9238-432c-96b1-9895369f2e23" />

---

