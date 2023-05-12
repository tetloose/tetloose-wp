# First Load

## Installing Wordpress

Once the project has been set up using `yarn setup`, open your browser and goto the project host i.e. `project-name.test/wp/wp-admin`.

You're presented with the Wordpress installer.

Choose your language and click **Continue**.

### Usernames

Prefix your user name with {user-name}-dev, **-dev** is a wildcard that gives that user developer capabilities. All other users will be given a slimed down version of Wordpress UI.

Fill out the rest and click **Install Wordpress**, then Login.

## Logged in

### Users

Goto **Users** -> **{user-name}-dev** and update your profile.

Add First / Last Name and Nickname. Then select your **Display name publicly as** something other than your username, this is a big security flaw.

### Plugins

Before activating the Theme you must activate the plugins.

Goto **Plugins** and activate the **required plugins** below:

1. Advanced custom fields pro
2. Advanced Custom Fields: Nav Menu Field
3. Classic Editor

**These ones are optional:**

1. ACF Content Analysis for Yoast SEO
2. Akismet Anti-Spam: Spam Protection
3. Contact Form 7
4. Easy Post Duplicator
5. Simple Custom Post Order
6. Yoast SEO

**For Production:**

1. Wordfence Security
2. WPS Hide Login

### Theme

Goto **Appearance** -> **Themes** and activate **Tetloose-Theme**.

If you get a php error `Warning: require_once(/`, it means the theme hasn't been populated with components, run `yarn dev` to fix this.

### ACF Fields

1. Goto **ACF** -> **Field Groups** -> **Sync available** and sync all the files.
2. Goto **ACF** -> **Post Types** -> **Sync available** and sync all post types.

### Pages

Goto **Pages** and create a new page.

Call this Homepage, or what ever you wanna call the homepage. In page attributes assign it the template **Homepage** and click **Publish**. All other pages can be left as **Default Template**.

Goto **Appearance** -> **Customize**.

You will have a few errors you can ignore these.

Click **homepage settings** -> **A static page** and select **Homepage** then click **Publish** and close the **Customizer**.

# Navigation

[THEME >>](theme.md)
