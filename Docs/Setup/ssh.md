# SSH

Make sure you have SSH access to your deployment environment

## SSH Local config

Edit or create `~/.ssh/config` and add:

```
host project-name
  Port 22
  HostName host-name-address
  User host-user-name
```

## Server side

1. `ssh project-name` -> enter password
2. `ssh-keygen -t rsa -b 4096 -C "email@address.com"` -> hit enter till it completes
3. ``eval $(ssh-agent -s) && eval `ssh-agent` && ssh-add ~/.ssh/id_rsa``
4. `touch ~/.ssh/authorized_keys && chmod 700 ~/.ssh && chmod 600 ~/.ssh/authorized_keys`
5. `cat ~/.ssh/id_rsa.pub`

Copy the output, add this key to your repo, e.g. `https://github.com/settings/keys`.

Once this is done log out `exit`.

## No Password SSH

To enable no password ssh, your local public key needs to be added to the servers authorized_keys

- `rsync ~/.ssh/id_rsa.pub project-name:~/.ssh/project-name.pub`
- `ssh project-name` -> enter password
- `cat ~/.ssh/project-name.pub >> ~/.ssh/authorized_keys`
- Remove `~/.ssh/project-name.pub`
- `exit`
- `ssh project-name` -> no password required

## Navigation

[<< BACK TO SETUP](setup.md)
