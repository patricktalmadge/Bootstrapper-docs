<section id="badges">
  <div class="page-header">
    <h1>Badges <small>Indicators and unread counts</small></h1>
  </div>
  <h3>Available functions</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Example</th>
        <th>Function call</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php echo Badge::normal(1); ?>
        </td>
        <td>
          <code>echo Badge::normal(1);</code>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo Badge::success(2); ?>
        </td>
        <td>
          <code>echo Badge::success(2);</code>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo Badge::warning(4); ?>
        </td>
        <td>
          <code>echo Badge::warning(4);</code>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo Badge::important(6); ?>
        </td>
        <td>
          <code>echo Badge::important(6);</code>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo Badge::info(8); ?>
        </td>
        <td>
          <code>echo Badge::info(8);</code>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo Badge::inverse(10); ?>
        </td>
        <td>
          <code>echo Badge::inverse(10);</code>
        </td>
      </tr>
    </tbody>
  </table>
</section>