<!DOCTYPE html>
<html>
  <head>
    <title>ARIA Spinner Role Example</title>
    <?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/spinner.css" />
    <meta charset="utf-8" />
  </head>

  <body>
    <?php include("includes/example-header.php"); ?>

    <main>
      <h1>Numeric Input Examples</h1>

      <aside class="notes">
        <h2>Notes:</h2>

        <ul>
          <li>
            This ARIA spinner examples were originally in the article
            <a
              href="https://web.archive.org/web/20170424171217/http://oaa-accessibility.org/examplep/spinbutton1/"
              >Example - Spinbutton using IMG elements for buttons</a
            >
            by the
            <a href="http://oaa-accessibility.org/">Open Ajax Alliance</a> (now
            currently offline).
          </li>
          <li>
            ChromeVox makes the really odd choice of converting an
            <code>&lt;input type="number"&gt;</code> tag to an
            <code>&lt;input type="text" &gt;</code> onFocus. It does, however,
            report to the user that it is "Edit Text, Numeric Only", and will
            remove any numeric value within the input onBlur.
          </li>
          <li>
            NVDA reports both the ARIA spinner and the native HTML
            <code>&lt;input type="number"&gt;</code> tags as a "spinbutton".
          </li>
          <li>
            Voiceover reports the ARIA version as a "stepper" and the HTML
            <code>&lt;input type="number"&gt;</code> tag as "incrementable edit
            text".
          </li>
          <li>
            It is possible to have a numeric input without the spinner by using
            <code
              >&lt;input type="text" inputmode="numeric"
              pattern="[0-9]*"&gt;</code
            >. This is currently what the
            <a
              href="https://technology.blog.gov.uk/2020/02/24/why-the-gov-uk-design-system-team-changed-the-input-type-for-numbers/"
              >recommendation of the UK government when dealing with numeric
              information that isn't a quantity</a
            >.
          </li>
        </ul>
      </aside>

      <h2>ARIA example</h2>

      <label id="sb1_label" class="sbLabel" for="sb1"
        >Choose a number between 0 and 100</label
      >
      <div class="spinControl">
        <div
          id="sb1"
          class="spinbutton"
          role="spinbutton"
          aria-labelledby="sb1_label"
          aria-valuemin="0"
          aria-valuemax="100"
          aria-valuenow="50"
          data-increment="10"
          tabindex="0"
        >
          50
        </div>
        <div id="sb1_up" class="spin-button spin-button--up" role="button" title="Increase Value">
          <img src="images/button-arrow-up.png" role="presentation" />
        </div>
        <div id="sb1_down" class="spin-button spin-button--down" role="button" title="Decrease Value">
          <img src="images/button-arrow-down.png" role="presentation" />
        </div>
      </div>

      <label id="sb2_label" class="sbLabel" for="sb2"
        >Choose a number between 500 and 1000</label
      >
      <div class="spinControl">
        <div
          id="sb2"
          class="spinbutton"
          role="spinbutton"
          aria-labelledby="sb2_label"
          aria-valuemin="500"
          aria-valuemax="1000"
          aria-valuenow="750"
          data-increment="50"
          tabindex="0"
        >
          750
        </div>
        <div id="sb2_up" class="spin-button spin-button--up" role="button" title="Increase Value">
          <img src="images/button-arrow-up.png" role="presentation" />
        </div>
        <div id="sb2_down" class="spin-button spin-button--down" role="button" title="Decrease Value">
          <img src="images/button-arrow-down.png" role="presentation" />
        </div>
      </div>

      <h2>HTML input type="number" example</h2>

      <label id="html_number" class="sbLabel" for="type-number"
        >Quantity between 500 and 1000</label
      >
      <input id="type-number" type="number" min="500" max="1000" value="500" />

      <h2>HTML numeric value that isn't a quanity</h2>

      <label for="non-quantity">Zip Code:</label>
      <input id="non-quantity" type="text" inputmode="numeric" pattern="[0-9]*">

    </main>

    <script src="js/spinbutton.js"></script>
  </body>
</html>