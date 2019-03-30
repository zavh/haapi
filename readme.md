LARAVEL API
===
Laravel Backend for Home Automation system.
---

This backend  provides API for Web, Andorid and iOS front ends which are all made with React & React Native. Front-end packages are kept in a separate repo. 

**Development notes**

• Send Events to clients (Server Sent Event capabilities)

• JWT Implementation. Instead of Laravel's CSRF, JSON Web Token has been used for Authentication. Followed the backend installation part from: https://medium.com/@Gbxnga/token-based-authentication-with-react-and-laravel-restful-api-83f16581e85

• CORS Implemented from https://github.com/barryvdh/laravel-cors
