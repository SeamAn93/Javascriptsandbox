export default class User {
    constructor(name, age) {
        this.name = name
        this.age = age
    }
}

export function printName(User) {
    console.log(`User's name is ${user.name}`)
}

export function printAge(user) {
    console.log(`User is ${user.age} years old`)
}
 /* Man kan exporte til sidste som vidst nedenfor eller ved at foran class og function, som vidst opover.
export default User
export {printName, printAge}
  */