<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Sigende titel</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<script>
/* Det her er den "normal" måde man ville gøre det på. Men man kan lave det som en class, når man har flere af de samme.
    const cardone = {
        brand: 'VW',
        price: 5,
        currency 'BTC'
        rate: 300000,
        getPriceInDKK: function (){
            return this.price = this.rate + 'DKK';
        }
    }

    const cardTwo = {
        brand: 'BMW',
        price: 7,
        currency 'BTC'
        rate: 300000,
        getPriceInDKK: function (){
            return this.price = this.rate + 'DKK';
        }
    }

    const cardThree = {
        brand: 'Audi',
        price: 9,
        currency 'BTC'
        rate: 300000,
        getPriceInDKK: function (){
            return this.price = this.rate + 'DKK';
        }
    }
*/
    class Car {
        constructor(brand, price){
            this.brand = brand;
            this.price = price;
            this.currency = 'BTC';
            this.rate = 300000;
        }

        getPriceInDKK(){
            return this.price * this.rate + 'DKK';
        }
    }

    /*Class bliver kopieret, så hver const nedenunder, bruger class til at finde dataen*/

const carOne = new Car('VW', 5);
const carTwo = new Car('BMW', 7);
const carThree = new Car('Audi', 9);

console.log(carOne);
console.log(carTwo);
console.log(carThree);

/*
    console.log(cardone.getPriceInDKK());
    console.log(cardTwo.getPriceInDKK());
    console.log(cardThree.getPriceInDKK());

 */
</script>

</body>
</html>
