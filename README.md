
**NOTICE:** [This is the forked version of the original EasyEngine that was written in Python. This repository is deprecated. ](https://easyengine.io/).


EasyEngine (ee) is a python tool, which makes it easy to manage your wordpress sites running on nginx web-server.

**EasyEngine currently supports:**

- Ubuntu 12.04 & 14.04 & 16.04
- Debian 7 & 8

**Port Requirements:**

| Name  | Port Number | Inbound | Outbound  |
|:-----:|:-----------:|:-------:|:---------:|
|SSH    |22           | ✓       |✓          |
|HTTP    |80           | ✓       |✓          |
|HTTPS/SSL    |443           | ✓       |✓          |
|EE Admin    |22222           | ✓       |          |
|GPG Key Server    |11371           |        |✓          |

## Quick Start

```bash
wget -qO ee https://raw.githubusercontent.com/iam404/easyengine-py/master/install && sudo bash ee     # Install easyengine 3
sudo ee site create example.com --wp     # Install required packages & setup WordPress on example.com
```

## Update EasyEngine


Update procedure for EasyEngine to latest version

#### For current installed version prior to 3.0.6
```bash
wget -qO ee https://raw.githubusercontent.com/iam404/easyengine-py/master/install && sudo bash ee

```
#### If current version is after than 3.0.6
```
ee update
```

## More Site Creation Commands

### Standard WordPress Sites

```bash
ee site create example.com --wp                  # install wordpress without any page caching
ee site create example.com --w3tc                # install wordpress with w3-total-cache plugin
ee site create example.com --wpsc                # install wordpress with wp-super-cache plugin
ee site create example.com --wpfc                # install wordpress + nginx fastcgi_cache
ee site create example.com --wpredis             # install wordpress + nginx redis_cache
```

### WordPress Multsite with subdirectory

```bash
ee site create example.com --wpsubdir            # install wpmu-subdirectory without any page caching
ee site create example.com --wpsubdir --w3tc     # install wpmu-subdirectory with w3-total-cache plugin
ee site create example.com --wpsubdir --wpsc     # install wpmu-subdirectory with wp-super-cache plugin
ee site create example.com --wpsubdir --wpfc     # install wpmu-subdirectory + nginx fastcgi_cache
ee site create example.com --wpsubdir --wpredis  # install wpmu-subdirectory + nginx redis_cache
```

### WordPress Multsite with subdomain

```bash
ee site create example.com --wpsubdomain            # install wpmu-subdomain without any page caching
ee site create example.com --wpsubdomain --w3tc     # install wpmu-subdomain with w3-total-cache plugin
ee site create example.com --wpsubdomain --wpsc     # install wpmu-subdomain with wp-super-cache plugin
ee site create example.com --wpsubdomain --wpfc     # install wpmu-subdomain + nginx fastcgi_cache
ee site create example.com --wpsubdomain --wpredis  # install wpmu-subdomain + nginx redis_cache
```

### Non-WordPress Sites
```bash
ee site create example.com --html     # create example.com for static/html sites
ee site create example.com --php      # create example.com with php support
ee site create example.com --mysql    # create example.com with php & mysql support
```

### HHVM Enabled Sites
```bash
ee site create example.com --wp --hhvm           # create example.com WordPress site with HHVM support
ee site create example.com --php --hhvm          # create example.com php site with HHVM support
```

### PageSpeed Enabled Sites
```bash
ee site create example.com --wp --pagespeed      # create example.com WordPress site with PageSpeed support
ee site create example.com --php --pagespeed     # create example.com php site with PageSpeed support
```

## Cheatsheet - Site creation


|                    |  Single Site  | 	Multisite w/ Subdir  |	Multisite w/ Subdom     |
|--------------------|---------------|-----------------------|--------------------------|
| **NO Cache**       |  --wp         |	--wpsubdir           |	--wpsubdomain           |
| **WP Super Cache** |	--wpsc       |	--wpsubdir --wpsc    |  --wpsubdomain --wpsc    |
| **W3 Total Cache** |  --w3tc       |	--wpsubdir --w3tc    |  --wpsubdomain --w3tc    |
| **Nginx cache**    |  --wpfc       |  --wpsubdir --wpfc    |  --wpsubdomain --wpfc    |
| **Redis cache**    |  --wpredis    |  --wpsubdir --wpredis |  --wpsubdomain --wpredis |


## License
[MIT](http://opensource.org/licenses/MIT)
