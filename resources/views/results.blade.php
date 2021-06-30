@include('header')

<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

#rcorners1 {
  border-radius: 25px;
  padding: 10px;
  width: 200px;
  height: 150px;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    padding -8px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    /*color: #009879; */
}

</style>

<table class="styled-table">
    <thead>
        <tr>
            <th>CREDIT SCORING</th>
            <th>VALUE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Altman's Z Score</td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $altmancolor; ?>; color:white;"><?php echo $altman; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Index 05</td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $in05color; ?>; color:white;"><?php echo $in05; ?></span></td>
        </tr>
        <tr>
            <td>Quick Test</td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $quicktestcolor; ?>; color:white;"><?php echo $quicktest; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Index Bonity</td>
      <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $bonitycolor; ?>; color:white;"><?php echo $bonity; ?></span></td>
        </tr>
        <tr>
            <td>Taffler's Z score </td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $tafflercolor; ?>; color:white;"><?php echo $taffler; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Binkert's Model</td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $binkertcolor; ?>; color:white;"><?php echo $binkert; ?></span></td>
        </tr>
    </tbody>
</table>

@include('model_footer')
