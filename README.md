# WAŻNE
Należy przestrzegaś **Standardów** i **GIT Flow**
## O projekcie

## Standardy
- [Zasady pisania changelog](https://keepachangelog.com/pl/1.0.0/).
- [Zasady tworzenia kodu w PHP z Laravel](https://github.com/maciejjeziorski/laravel-best-practices-pl).

## Dokumentacja
Do tworzenia dokumentacji używamy Swagger
[http://127.0.0.1:8000/api/documentation](http://127.0.0.1:8000/api/documentation).
```
php artisan l5-swagger:generate
```

## GIT Flow
[https://leanpub.com/git-flow/read](https://leanpub.com/git-flow/read)

## Biblioteki


## Do zrobienia przed uruchomieniem projektu
1. Należy dodać hosta do ```%SystemRoot%\system32\drivers\etc\hosts```
```
127.0.0.1 tasmanian-dev.loc
```

## Tworzenie elementów Laravel
Migracje
```
php artisan make:migration create_workspaces_table
```
Controller i Model
```
php artisan make:controller ProductController --api --model=Product
```

Request (walidacja)
```
php artisan make:request ProductRequest
```
