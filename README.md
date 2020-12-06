# A11y Mistakes

## The six most common accessibility mistakes and how to avoid them

Data for this guide courtesy [© WebAIM - The WebAIM Million](https://webaim.org/projects/million/)

In 2019 and 2020, WebAIM surveyed the homepages for the top 1,000,000 websites and compiled a list of the six most common accessibility mistakes. This guide will illustrate what they are and how to fix them.

1. [Low contrast text](https://github.com/angelajholden/a11ymistakes#1-low-contrast-text)
2. [Missing alternative text for images](https://github.com/angelajholden/a11ymistakes#2-missing-alternative-text-for-images)
3. [Empty links](https://github.com/angelajholden/a11ymistakes#3-empty-links)
4. [Missing form input labels](https://github.com/angelajholden/a11ymistakes#4-missing-form-input-labels)
5. [Empty buttons](https://github.com/angelajholden/a11ymistakes#5-empty-buttons)
6. [Missing document language](https://github.com/angelajholden/a11ymistakes#6-missing-document-language)

---

### 1) Low contrast text

:bar_chart: 86.3% of homepages in 2020

From the [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/):

> WCAG 2.0 level AA requires a contrast ratio of at least 4.5:1 for normal text and 3:1 for large text. WCAG 2.1 requires a contrast ratio of at least 3:1 for graphics and user interface components (such as form input borders). WCAG Level AAA requires a contrast ratio of at least 7:1 for normal text and 4.5:1 for large text.
>
> Large text is defined as 14 point (typically 18.66px) and bold or larger, or 18 point (typically 24px) or larger.

| Contrast Ratio :sparkles: |  AA   |  AAA  |
| :------------------------ | :---: | :---: |
| Normal Text               | 4.5:1 |  7:1  |
| Large Text                |  3:1  | 4.5:1 |
| UI Components             |  3:1  |  NA   |

| Text Size :sparkles:             | Point |  Pixel  |
| :------------------------------- | :---: | :-----: |
| Normal Text (normal font weight) | 12pt  |  16px   |
| Large Text (bold font weight)    | 14pt  | 18.66px |
| Large Text (normal font weight)  | 18pt  |  24px   |

##### More Info

-   https://css-tricks.com/accessible-font-sizing-explained/

---

### 2) Missing alternative text for images

:bar_chart: 66% of homepages in 2020

#### Correct - image with alt text

<!-- prettier-ignore-start -->
```html
<img src="https://picsum.photos/840/472" alt="Random placeholder photo from Lorem Picsum" />
```
<!-- prettier-ignore-end -->

#### Also correct - image with alt null value

Alt text attributes can be included but have a null value, and screen readers will skip the image. Use this method when an image is decorative and reading the alt text doesn't add value for the user.

```html
<img src="https://picsum.photos/840/472" alt="" />
```

#### Incorrect - image without alt text

```html
<img src="https://picsum.photos/840/472" />
```

##### More Info

-   https://developer.mozilla.org/en-US/docs/Web/API/HTMLImageElement/alt

---

### 3) Empty links

:bar_chart: 59.9% of homepages in 2020

By default the anchor element href attribute takes a URL, media file, telephone number or email address. Links should also have text so screen readers tell the user what they are clicking on. Links shouldn't just say Read more, Learn more, etc. That text does not tell users where the link will take them.

```html
<a href="https://webaim.org">Read more on WebAIM</a>
```

It's common to add icon fonts or SVGs to links and omit the text. Wrap the link text in a `<span></span>` and hide it with screen reader friendly CSS. Add `aria-label="hidden"` so screen readers don't read the SVG. Using `display: none;` or `visibility: hidden;` removes it from the DOM, and screen readers won't read elements styled that way.

```css
.screen-reader-text {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1;
    clip: rect(0 0 0 0);
}
```

<!-- prettier-ignore-start -->
```html
<a href="https://webaim.org">
    <span class="screen-reader-text">Read more on WebAIM</span>
    <svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/></svg>
</a>
```
<!-- prettier-ignore-end -->

##### More Info

-   https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
-   https://www.w3.org/TR/wai-aria-1.1/#aria-label

---

### 4) Missing form input labels

:bar_chart: 53.8% of homepages in 2020

Use the `for=""` attribute on the `<label>`, and use a matching `id=""` attribute on its `<input>`.

```html
<label for="name">Full Name</label>
<input id="name" type="text" name="fullname" placeholder="Full Name" />
```

When you want to hide the form label, use screen reader friendly CSS. Using `display: none;` or `visibility: hidden;` removes it from the DOM, and screen readers won't read elements styled that way.

```css
.screen-reader-text {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1;
    clip: rect(0 0 0 0);
}
```

```html
<label class="screen-reader-text" for="name">Full Name</label>
<input id="name" type="text" name="fullname" placeholder="Full Name" />
```

If you aren't hiding form labels, they can also be wrapped around the form element.

<!-- prettier-ignore-start -->
```html
<label for="name">Full Name
    <input id="name" type="text" name="fullname" placeholder="Full Name" />
</label>
```
<!-- prettier-ignore-end -->

##### More Info

-   https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
-   https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input

---

### 5) Empty buttons

:bar_chart: 28.7% of homepages in 2020

For the purposes of this guide, buttons are similar to anchor tags (links) and also need text. If your button needs to link to something, you're better off using an anchor and styling it like a button.

There are three button types; submit and reset (forms), and button. The `type="button"` attribute doesn't have default functionality, so you can have it do just about anything.

```html
<button type="button">Read More</button>
```

And like links, it's common to use icon fonts and SVGs with the button element. Make sure to add button text and hide it with screen reader friendly CSS.

```css
.screen-reader-text {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1;
    clip: rect(0 0 0 0);
}
```

<!-- prettier-ignore-start -->
```html
<button>
    <span class="screen-reader-text">Read more</span>
    <svg aria-label="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/></svg>
</button
```
<!-- prettier-ignore-end -->

##### More Info

-   https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
-   https://www.w3.org/TR/wai-aria-1.1/#aria-label

---

### 6) Missing document language

:bar_chart: 28% of homepages in 2020

```html
<html lang="en"></html>
```

##### More Info

-   https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/lang

---

I encourage you to continue reading and learning about accessibilty. This topic goes far beyond what is outlined in this guide. Knowing that 98.1% of the websites surveyed had a detecable error implies that fixing these six things could have a vast improvement on overall web accessibility.

Cheers!  
Angela :two_hearts:
