/*
  Shirtify - Document Structure
  By: Mehran Joya
*/

//Customer Document
{
  "_id" : ObjectId("5a6897f48bb635af028ec8f5"),
  "firstname" : "Harish",
  "lastnmae" : "Mistry",
  "address" : "The Burroghs, Middlesex, NW4 4BT",
  "telephone" : "07912345678",
  "email" : "hmistry@shirtify.com",
  "password" : "5f4dcc3b5aa765d61d8327deb882cf99"
}

//Products Document
{
  "_id" : ObjectId("5a6899f08bb635af028ec8f6"),
  "name" : "tshirt1",
  "description" : "tshirt1 description",
  "img" : "tshirt1.png",
  "price" : "20",
  "qty" : "10",
  "size" : "large",
  "gender" : "male",
  "categories" : "buildings"
}

//Cart document
{
  "_id" : ObjectId("5a689d548bb635af028ec8f7"),
  "customer_id" : ObjectId("5a6897f48bb635af028ec8f5"),
  "session_id" : "1",
  "date" : "24/01/2018",
  "time" : "13:49",
  "cost" : 40,
  "products" : [
    {
      "_id" : ObjectId("5a6899f08bb635af028ec8f6"),
      "qty" : 2
    }
  ]
}


//Order document
{
  "_id" : ObjectId("5a689d688bb635af028ec8f8"),
  "customer_id" : ObjectId("5a6897f48bb635af028ec8f5"),
  "shipping_address" : "The Burroghs, Middlesex, NW4 4BT",
  "date" : "24/01/2018",
  "time" : "13:37",
  "cost" : 60,
  "products" : [
    {
      "id" : ObjectId("5a6899f08bb635af028ec8f6"),
      "qty" : 3
    },
  ]
}

//Staff Document
{
  "_id" : ObjectId("5a689d828bb635af028ec8f9"),
  "firstname" : "Harish",
  "lastnmae" : "Mistry",
  "telephone" : "07912345678",
  "email" : "hmistry@shirtify.com",
  "username" : "hmistry",
  "password" : "5f4dcc3b5aa765d61d8327deb882cf99",
  "role" : "staff"
}
