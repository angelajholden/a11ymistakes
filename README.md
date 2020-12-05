# A11y Mistakes

## The six most common accessibility mistakes and how to fix them

In 2019 and 2020, WebAIM surveyed the homepages for the top 1,000,000 websites and compiled a list of the six most common accessibility mistakes. This guide will illustrate what they are and how to fix them.

### 1) Low contrast text

---

### 2) Missing alternative text for images

#### Correct - image with alt text

```
<img src="https://picsum.photos/1024/768" alt="Random placeholder photo from Lorem Picsum" />
```

#### Also correct!

Alt text attributes can be included but left empty and screen readers will skip the image altogether. Use this method when an image is decorative and not needed to communicate the narrative of a webpage.

```
<img src="https://picsum.photos/1024/768" alt="" />

```

#### Incorrect - image without alt text

```
<img src="https://picsum.photos/1024/768" />

```

---

### 3) Empty links

```
<a href="https://webaim.org">Click Me</a>
```

---

### 4) Missing form input labels

Use the `for=""` attribute on the `<label>`, and use a matching `id=""` attribute on its `<input>`.

```
<label for="name">Full Name</label>
<input id="name" type="text" name="fullname" placeholder="Full Name" />
```

When you want to hide the form label, use screen reader friendly CSS. Using `display: none;` and `visibility: hidden;` removes it from the DOM and screen readers won't read them to the user.

```
<style>
    .screen-reader-text {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1;
        clip: rect(0 0 0 0);
    }
</style>

<label class="screen-reader-text" for="name">Full Name</label>
<input id="name" type="text" name="fullname" placeholder="Full Name" />
```

If you aren't hiding form labels, they can also be wrapped around the form element.

```
<label for="name">Full Name
    <input id="name" type="text" name="fullname" placeholder="Full Name" />
</label>
```

---

### 5) Empty buttons

```
<button>Click Me</button>
```

---

### 6) Missing document language

```
<html lang="en"></html>
```

---

### Resources

-   https://webaim.org/projects/million/

---

Cheers!  
Angela :two_hearts:
