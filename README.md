## Setup (Docker + Laravel Sail)

### Requirements
- Docker
- Docker Compose v2

### Run project
```bash
git clone https://github.com/Ahmed-Nabeeh/phoenix.git
cd phoenix
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
