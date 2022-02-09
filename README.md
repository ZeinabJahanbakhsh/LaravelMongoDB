In this example, I will create mongodb database with "posts" collection. Then we will configuration of mongodb details on env file, then I will create CRUD with Laravel 7.30 application.

## Installation

1. Download and install mongoDB from: https://www.mongodb.com/try/download

2. Download and install Robo 3T from: https://robomongo.org/download
   
3. Run mongo drive with command: mongod.
if error display: **mongod is not recognized!**
you should **set environment variable = C:\Program Files\MongoDB\Server\4.4\bin**

4. Try to run mongo drive with command: mongod

5. After run mongod, if you saw this message: **NonExistentPath: Data directory C:\data\db\ not found.**
**For solving this**, you will create directory C:\data\db.

See more:
https://github.com/jenssegers/laravel-mongodb
