import User from './user.js'

const user = new User('Bob',11)
console.log(user)

/* Vi kan ændre class name, når vi importere fx user --> U
import U from './user.js'

const user = new U('Bob',11)
console.log(user)
 */

/* Vi kan importere de enkle functioner. Vi kan også ændre function navne ved --> "as "nyt name"" efter
import User { printName , printAge} from './user.js'

const user = new User('Bob',11)
console.log(user)
*/