# Aeon Reports Plugin

Local reports plugin for Moodle 5.2.

## Moodle Component

| Key | Value |
|---|---|
| **Component** | `local_aeonreports` |
| **Type** | Local plugin |
| **Requires** | Moodle 5.2+ |
| **Status** | Alpha (v0.1.0) |

## File Structure

```
aeon-lms-local-reports/
├── version.php                  # Plugin metadata
├── lang/en/
│   └── local_aeonreports.php    # Language strings
├── index.php                    # Entry point
├── classes/                     # PHP classes (TODO)
├── db/
│   ├── install.xml              # DB schema (TODO)
│   ├── upgrade.php              # Migration (TODO)
│   └── mobile.php               # Mobile app support (TODO)
├── .github/workflows/
│   └── deploy.yml               # CI/CD pipeline
└── README.md
```

## Local Development

```bash
# 1. Clone repo
cd /path/to/lab/aeon-lms-plugins
git clone https://github.com/lookmedia-tech/aeon-lms-local-reports.git

# 2. Mount ke Docker (edit docker-compose.yml)
# Tambahkan volume mount:
#   - ./aeon-lms-local-reports:/var/www/html/local/aeonreports:delegated

# 3. Restart container
cd /path/to/lab/aeon-lms-web
docker compose restart moodle

# 4. Akses di browser
# http://localhost/local/aeonreports

# 5. Develop & test
# - Edit file → langsung reflected di container
# - Cek log: docker compose logs -f moodle
```

## Deployment

Push ke `main` → auto-deploy ke staging server via CI/CD.

| Detail | Value |
|---|---|
| Server | `aeon.lookmedia.co.id` |
| Remote path | `/opt/aeon-lms-web/plugins/local_aeonreports/` |
| Post-deploy | `docker compose restart moodle` |
| Trigger | Push ke `main` branch |

## Language Strings

| Key | Value |
|---|---|
| `pluginname` | Aeon Reports |
| `reports` | Reports |
| `dashboard` | Dashboard |
| `settings` | Settings |
| `viewreports` | View Reports |
| `exportdata` | Export Data |

## Next Steps

- [ ] Implement reports dashboard
- [ ] Add data export functionality
- [ ] Create `db/install.xml` for DB tables
- [ ] Add `db/mobile.php` for mobile app support
- [ ] Write PHPUnit tests
- [ ] Add templates & JavaScript modules

## CI/CD Setup (GitHub Secrets Required)

| Secret | Description |
|---|---|
| `SSH_PRIVATE_KEY` | SSH private key for deployment |
| `SERVER_USER` | SSH username for server |
