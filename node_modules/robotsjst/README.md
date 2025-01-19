![robotsJST](https://socialify.git.ci/nahidhk/robotsJST/image?language=1&owner=1&name=1&stargazers=1&theme=Light)
# RobotsJST Install

Follow the steps below to install and use RobotsJST in your project. This guide provides a detailed explanation of installation, setup, and examples to help you integrate RobotsJST seamlessly into your web application.

---

## Step 1: Clone the Repository

Start by cloning the RobotsJST repository from GitHub. Open your terminal and run the following command:

```bash
git clone https://github.com/nahidhk/robotsJST.git
```

This will create a local copy of the repository on your machine.

---

## Step 2: Include RobotsJST in Your Project

To include the RobotsJST script in your project, use the following CDN link in your HTML file:

```html
<script src="/robotsJST/robotsjs.main.js?v=1.0&cdn=html%php" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
```

Make sure this script tag is placed within the `<head>` or just before the closing `<body>` tag in your HTML file to ensure it loads correctly.

---

## Step 3: Making API Calls with RobotsJST

RobotsJST provides support for API calls using JavaScript functions. You can use either the `GET` or `POST` method depending on your requirements.

### Example of a GET Request

The following code demonstrates how to make a simple `GET` request:

```javascript
apirobotsJS({method: 'get', call: '/test.php', id: 'myform'});
```

### Example of a POST Request

For a `POST` request, modify the `method` parameter accordingly:

```javascript
apirobotsJS({method: 'post', call: '/submit.php', id: 'myform'});
```

---

## Step 4: HTML and PHP Form Integration

Integrating RobotsJST with an HTML form is simple. Below is an example demonstrating how to set up a login form with API integration:

### HTML Code Example

```html
<form id="myform">
    <input name="username" type="text" placeholder="Username"><br>
    <input name="password" type="password" placeholder="Password"><br>
    <div id="robotsJST"></div>
    <input onclick="apirobotsJS({method: 'get', call: '/test.php', id: 'myform'})" type="button" value="Login">
</form>
```

### Explanation of the Code
- **`id="myform"`**: The form is identified using the `id` attribute, which is passed to the `apirobotsJS` function.
- **`apirobotsJS` Function**: The `onclick` event triggers the `apirobotsJS` function to make the API call.
- **Form Fields**: The form includes inputs for username and password.

---

## Step 5: Customizing API Behavior

You can customize your API calls by passing additional parameters to the `apirobotsJS` function. For example:

```javascript
apirobotsJS({
    method: 'post',
    call: '/custom.php',
    id: 'customForm'
});
```

---

By following these steps, you can efficiently integrate and utilize RobotsJST in your project. For further assistance, refer to the [official documentation](https://github.com/nahidhk/robotsJST/wiki).
