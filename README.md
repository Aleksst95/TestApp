## First start

1. `cp ./docker/.env.example ./docker/.env` - create docker .env file. Check ports availability from the .env file 
   before the next step. 
2. `make up` - run docker containers
3. `cp ./.env.example ./.env` - create laravel .env file
4. `make generate-app-key` - generate the Laravel Application Key
5. `make composer-install` - get composer dependencies
6. `make migration-seed` - run migrations with seeds
7. Add to the system `hosts` file the following line `127.0.0.1 alex-test.local`
8. Go to the [alex-test.local](http://alex-test.local)

## Additional information

- [API Documentation](http://alex-test.local/api/documentation)

I didn't add pagination because it wasn't part of the task. I don't want to waste development time on features
that weren't asked.
Also, I understand that the Frontend application can be broader in functionality (like autocomplete for name filter),
but I did not do that for the same reason as before.
