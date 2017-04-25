# uus tabel 
CREATE TABLE amezenin_loomaaed (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  nimi VARCHAR(150),
  vanus INTEGER,
  liik VARCHAR(150),
  puur INTEGER
);

# täitmine
INSERT INTO amezenin_loomaaed (nimi, vanus, liik, puur) VALUES
  ('Vinni Puhh', 5, 'Karu', 3),
  ('Pjata4ok', 3, 'Siga', 2),
  ('Kot', 6, 'Kass', 1),
  ('Sharik', 7, 'Koer', 4),
  ('Balu', 8, 'Karu', 3),
  ('Kotik', 8, 'Kass', 1),
  ('Barbos', 7, 'Koer', 4);
  
 # päringud
 
 SELECT nimi, puur FROM amezenin_loomaaed WHERE puur = 1 || puur = 3 || puur = 4;
 
 SELECT MIN(vanus) AS 'Noorim', MAX(vanus) AS 'Vanim' FROM amezenin_loomaaed;
 
 SELECT puur, COUNT(puur) AS 'Loomade arv' FROM amezenin_loomaaed GROUP BY puur;
 
 UPDATE amezenin_loomaaed SET vanus=vanus+1;
 
 SELECT liik, COUNT(liik) AS 'Liikide arv' FROM amezenin_loomaaed GROUP BY liik;
