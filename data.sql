SELECT 'INSERT INTO races';
INSERT INTO races(name) VALUES
('human'),
('dragonborn'),
('elf'),
('dworf'),
('orc');

SELECT 'INSERT INTO players';
INSERT INTO players(name, race_id, score) VALUES
('AlexeyKomisarov', (SELECT id FROM races WHERE name = 'human'), 10000),
('Shrek',(SELECT id FROM races WHERE name = 'orc'), 100 ),
('Admin', (SELECT id FROM races WHERE name = 'dragonborn'), 0),
('artemipetrovski', (SELECT id FROM races WHERE name = 'dragonborn'), 1917),
('roman', (SELECT id FROM races WHERE name = 'orc'), 100000);
