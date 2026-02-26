-- Database dosen
UPDATE dosen SET foto = 'anon.jpeg' WHERE nama_lengkap LIKE '%Anon%';
UPDATE dosen SET foto = 'Arman.jpg' WHERE nama_lengkap LIKE '%Arman%';
UPDATE dosen SET foto = 'baskoro.jpg' WHERE nama_lengkap LIKE '%Baskoro%';
UPDATE dosen SET foto = 'detty.jpg' WHERE nama_lengkap LIKE '%Detty%';
UPDATE dosen SET foto = 'Emiliana.jpg' WHERE nama_lengkap LIKE '%Emiliana%';
UPDATE dosen SET foto = 'Endah Totok.jpg' WHERE nama_lengkap LIKE '%Endah Totok%';
UPDATE dosen SET foto = 'farel.jpg' WHERE nama_lengkap LIKE '%Farel%';
UPDATE dosen SET foto = 'jani.jpg' WHERE nama_lengkap LIKE '%Jani%';
UPDATE dosen SET foto = 'lanny.jpg' WHERE nama_lengkap LIKE '%Lanny%';
UPDATE dosen SET foto = 'Librecht.jpg' WHERE nama_lengkap LIKE '%Librecht%';
UPDATE dosen SET foto = 'Ni Putu.jpeg' WHERE nama_lengkap LIKE '%Ni Putu%';
UPDATE dosen SET foto = 'Noor.jpg' WHERE nama_lengkap LIKE '%Noor%';
UPDATE dosen SET foto = 'petrus.jpg' WHERE nama_lengkap LIKE '%Petrus%';
UPDATE dosen SET foto = 'Philip.jpg' WHERE nama_lengkap LIKE '%Philip%';
UPDATE dosen SET foto = 'Philipus.jpg' WHERE nama_lengkap LIKE '%Philipus%';
UPDATE dosen SET foto = 'Riston.jpg' WHERE nama_lengkap LIKE '%Riston%';
UPDATE dosen SET foto = 'saparman.jpg' WHERE nama_lengkap LIKE '%Saparman%';
UPDATE dosen SET foto = 'Sulastri.jpg' WHERE nama_lengkap LIKE '%Sulastri%';
UPDATE dosen SET foto = 'sumbut.jpg' WHERE nama_lengkap LIKE '%Sumbut%';
UPDATE dosen SET foto = 'Theophylus.jpg' WHERE nama_lengkap LIKE '%Theophylus%';
UPDATE dosen SET foto = 'Tri endah.jpg' WHERE nama_lengkap LIKE '%Tri Endah%';
UPDATE dosen SET foto = 'tulus.jpg' WHERE nama_lengkap LIKE '%Tulus%';
UPDATE dosen SET foto = 'hasan.jpeg' WHERE nama_lengkap LIKE '%Hasan%';

-- Database tendik
INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'SUYONO.jpg', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Yehezkiel Suyono%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'RIKI MARIADI.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Riki Mariadi%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'ENDANG.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Endang%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'christina.jpeg', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Christina%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'kornelius.jpg', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Kurnelius%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'RUTI.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Ruti%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'TESA.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Theresia%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'YOKIBET.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Yokibet%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'MELA.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Ni Komang%';

INSERT INTO foto_tendik (tendik_id, nama_cadangan, filename, created_at, updated_at)
SELECT id, nama, 'JOEL.png', NOW(), NOW()
FROM tendik
WHERE nama LIKE '%Joel%';

-- menambahkan divisi di table tendik
ALTER TABLE tendik MODIFY COLUMN divisi ENUM('keuangan','WK II Bag. Kepegawaian', 'pusdatin', 'sarpras', 'perpustakaan', 'p3s', 'sekprodi', 'alumni', 'lppm', 'spmi','sekretaris lembaga');
ALTER TABLE tendik MODIFY COLUMN pendidikan_terakhir ENUM('SMA', 'D3','S1', 'S2', 'S3');



