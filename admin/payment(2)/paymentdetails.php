<?php
require_once('../../config.php');
if (isset($_GET['id']) && $_GET['id'] > 0) {
  $qry = $conn->query("SELECT * from `item_list` where id = '{$_GET['id']}' ");
  if ($qry->num_rows > 0) {
    foreach ($qry->fetch_assoc() as $k => $v) {
      $$k = stripslashes($v);
    }
  }
}
?>

<style>
  span.select2-selection.select2-selection--single {
    border-radius: 0;
    padding: 0.25rem 0.5rem;
    padding-top: 0.25rem;
    padding-right: 0.5rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
    height: auto;
  }


  .div {
    background-color: var(--jay, #ffffff);
    display: flex;
    justify-content: center;
    max-width: 463px;
    padding-bottom: 80px;
    flex-direction: column;
    align-items: center;
    font-size: 20px;
    font-weight: 400;
    line-height: 120%;

  }

  .div-2 {
    font-family: Roboto Slab, sans-serif;
    align-items: start;
    background-color: #293352;
    align-self: stretch;
    width: 100%;
    color: var(--puis-president-ac-id-12633333740234375-x-5413333129882812-default-nero,
        var(--jay, #fff));
    justify-content: center;
    padding: 24px 29px;
  }
  .div-3 {
    margin-top: 70px;
    justify-content: center;
    align-items: center;
    text-align: center;

  }

  .div-4 {
    align-items: center;
    text-align: center;
    align-self: center;
    justify-content: center;
    border-radius: 8px;
    box-shadow: 0px 8px 16px 0px rgba(10, 147, 158, 0.24);
    background-color: #a51c30;
    margin-top: 20px;
    width: 300px;
    color: var(--myskill_id_e-learning_1440x810_default-Nero, #fff);
    padding: 12px 60px 13px;
    font: 700 15px/150% Public Sans, -apple-system, Roboto, Helvetica,
      sans-serif;
  }

  @media (max-width: 991px) {
    .div-14 {
      padding: 0 20px;
      margin-top: 40px;
    }
  }

  .div-4 {
    font-family: Merriweather Sans, sans-serif;
    flex-grow: 1;
    flex-basis: auto;
    margin: auto 0;
  }

  .div-5 {
    background-color: #a51c30;
    display: flex;
    margin-top: 45px;
    width: 100%;
    max-width: 320px;
    align-items: flex-start;
    gap: 20px;
    white-space: nowrap;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 18px;
  }

  .div-6 {
    font-family: Merriweather Sans, sans-serif;
    flex-grow: 1;
    flex-basis: auto;
    margin: auto 0;
  }

  .img {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 50px;
    border-radius: 1px;
    align-self: start;
  }
</style>

<body>
  <div class="div">

    <div class="div-2">Payment Details</div>

    <!-- images banks -->
    <div class="div-3">
      <button class="div-4" id="banks" onclick="Banks()">BANKS</button>
    </div>

    <!-- images ewallet -->
    <div class="div-3">
      <button class="div-4" onclick="Ewallet()">E-WALLET</button>
    </div>

  </div>
<script>
  $(document).ready(function() {
    $('#banks').click(function() {
      uni_modal("<i class='fa fa-plus'></i>", "payment/banks.php")
    })
    $('#ewallet').click(function() {
      uni_modal("<i class='fa fa-plus'></i>", "payment/ewallet.php")
    })
    $('.table th,.table td').addClass('px-1 py-0 align-middle')
    $('.table').dataTable();
  })
</script>
</body>

</html>