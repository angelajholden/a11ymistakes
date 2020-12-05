# A11y Mistakes

## The six most common accessibility mistakes and how to fix them

In 2019 and 2020, WebAIM surveyed the homepages for the top 1,000,000 websites and compiled a list of the six most common accessibility mistakes. This guide will illustrate what they are and how to fix them.

1. [Low contrast text](https://github.com/angelajholden/a11ymistakes#1-low-contrast-text)
2. [Missing alternative text for images](https://github.com/angelajholden/a11ymistakes#2-missing-alternative-text-for-images)
3. [Empty links](https://github.com/angelajholden/a11ymistakes#3-empty-links)
4. [Missing form input labels](https://github.com/angelajholden/a11ymistakes#4-missing-form-input-labels)
5. [Empty buttons](https://github.com/angelajholden/a11ymistakes#5-empty-buttons)
6. [Missing document language](https://github.com/angelajholden/a11ymistakes#6-missing-document-language)

---

### 1) Low contrast text

> WCAG 2.0 level AA requires a contrast ratio of at least 4.5:1 for normal text and 3:1 for large text. WCAG 2.1 requires a contrast ratio of at least 3:1 for graphics and user interface components (such as form input borders). WCAG Level AAA requires a contrast ratio of at least 7:1 for normal text and 4.5:1 for large text.
>
> Large text is defined as 14 point (typically 18.66px) and bold or larger, or 18 point (typically 24px) or larger.

---

### 2) Missing alternative text for images

#### Correct - image with alt text

```
<img src="https://picsum.photos/840/472" alt="Random placeholder photo from Lorem Picsum" />
```

![Random placeholder photo from Lorem Picsum](https://picsum.photos/838/471)

#### Also correct!

Alt text attributes can be included but left empty and screen readers will skip the image altogether. Use this method when an image is decorative and not needed to communicate the narrative of a webpage.

```
<img src="https://picsum.photos/840/472" alt="" />
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
