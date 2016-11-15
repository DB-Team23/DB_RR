window.onload = function() {
  gotowork();
};

function gotowork(){
  for (var i = 0; i < 10000; i++) {
    var date = new Date(faker.date.past(50,"2008-01-01")), locale = "en-us";

    var user = {
                username: faker.internet.userName(),
                password: faker.lorem.word(),
                lname: faker.name.firstName(),
                fname: faker.name.lastName(),
                birthday: "to_date('" + date.toLocaleString(locale, { month: "long" }) + " " + date.getDate() + ", " + date.getFullYear() + "', 'MONTH DD, YYYY')",
                owns: 'null'
            }

    $("#container").append("<p>insert into users values('"+user.username+"', '"+user.password+"', '"+user.lname+"', '"+user.fname+"', "+user.birthday+", null);" + "</p>");
  }

}
