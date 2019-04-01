var plaatjes = document.getElementsByTagName("img");
var random = 0;

var randomnummers = [];

while (randomnummers.length <9) {
    random = Math.floor(Math.random() * 9) + 1;
    if (randomnummers.lastIndexOf(random) == -1) {
        randomnummers.push(random);
    }
}

random = 0;
for (var plaatje in plaatjes) {
    plaatjes[plaatje].src = "huizen/huisje" + randomnummers[random] + ".jpg";
    random++;
}


= [
    'DT-LT-87','Citroen','XM','1999-09-23 00:00:00','34500',
    'GF-NX-07','Volkswagen','Polo','1999-07-12 00:00:00','78000',
    'GF-PD-34','Volkswagen,Polo','1999-07-22 00:00:00','57500',
    'KR-RT-65','Volkswagen','Golf','1999-08-08 00:00:00','42000',
    'PT-ER-45','Ford','Fiesta','1999-03-02 00:00:00','25000',
    'TT-PR-73','Citroen,XM,NULL','1200',
    'TT-RW-01','Volkswagen,Polo','1999-11-14 00:00:00','4500'
];