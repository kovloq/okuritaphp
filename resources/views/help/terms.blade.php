@extends('layouts.app')

@section('content')
<div class="page page--policy bg-light-green bg-ornament bg-ornament--sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <aside class="aside-policy pt-5">
                    <div class="list-group">
                        <a href="{{ url("help/privacy-policy") }}" class="list-group-item ">Privacy Policy</a>
                        <a href="{{ url("help/corporate-profile") }}" class="list-group-item">Corporate Profile</a>
                        <a href="{{ url("help/terms-of-service") }}" class="list-group-item active">Terms of Service</a>
                        <a href="{{ url("help/usage-fee") }}" class="list-group-item">Usage Fee</a>
                        <a href="{{ url("help/shipping-method") }}" class="list-group-item ">Shipping Method</a>
                        <a href="{{ url("help/payment-method") }}" class="list-group-item">Payment Method</a>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-9">
                <section class="policy pt-5">
                    <div class="card mb-0">
                        <div class="card-body perfect-scrollbar" style="max-height: none;">
                            <h3 class="policy-title">Okurita Terms of Service</h3>
                            <!-- <p class="policy-date">Last Update [10/10/2020]</p> -->
<h6 class="policy-subtitle" id="introduction">Definition</h6>
<p> The following terms are defined as stated:</p>
<ul>
<li>"Member" refers to individuals that agree to all terms before using the Service.</li>
<li>"We" refers to Okurita</li>
<li>"Transaction" refers to the buying and selling of items by members through this website.</li>
<li>"Sellers" refer to the Japan company who provides the platform for buying and selling through our website.</li>
<li>"Terms and Conditions, etc."" refers to these Terms and Conditions and Cautionary Notes when using this website. </li>
<li>"Item" a product which has been listed to be displayed in our website. </li>
<li>"Service" the Okurita Services as defined below</li>
</ul>

<h6 class="policy-subtitle" id="introduction">Okurita Services</h6>
<p>Okurita is an online marketplace platform that enables Members to buy items from Japan. As an online markeplace platform we do not own nor sell the listed Items on the website. Thus we put item from selllers to be sold in our platform. </p>

<p>Okurita will purchase the Products from the Seller on behalf of a member.</p>

<p>Members must pay for domestic delivery, overseas shipping, our selling fee, payment handling fee, tariffs, and other charges.</p>

<strong>◆ About our bidding service.</strong><br/>
<p>We can't accept any cancellation, return or claim request after a bid has been placed. Please check the auction information thoroughly before placing your bid.</p>

<p>Order cancellations after an item has been already won will be only carried on if the case adjusts to our regulations and criteria, and if the seller agrees to it. We can't accept cancellation requests for items that have already been shipped by the seller. In case a cancellation is finally possible, the costs stated below will be charged.</p>
<p>① 30% of the item price with a minimum of 2,000 Yen as negotiation fee between our company and the seller.
② Other charges that might have been incurred during the transaction will be also charged.
※ For both shopping and bidding services, if because of the order cancellation or modification our company suffers any penalty or loss, the customer will be charged accordingly.</p>

<p>No return,exchange or claim once the items arrived in our warehouse.</p>

<string>◆ About our shopping service</string><br/>

【Cancel】<br/>
<p>Order cancellations after an item has been already ordered will be only carried on if the case adjusts to our regulations and criteria, and if the seller agrees to it. We can't accept cancellation requests for items that have already been shipped by the seller. In case a cancellation is finally possible, the costs stated below will be charged.</p>
<p>① 30% of the item price with a minimum of 2,000 Yen as negotiation fee between our company and the store.
② Other charges that might have been incurred during the transaction will be also charged.
※ For both shopping and bidding services, if because of the order cancellation or modification our company suffers any penalty or loss, the customer will be charged accordingly. </p>

<p>No return,exchange or claim once the items arrived in our warehouse.</p>

<p>We cannot guarantee that you will win a particular auction. Please bid as high as you can to have the highest chance of success.</p>

<p>We provide information about translation websites for the convenience of customers. We do not, however, guarantee the accuracy of translations and cannot be held responsible for loss incurred as a result of inaccurate translations.</p>

<p>Members have to send us a Shipping Request within 30 days after Members receive Arrival Notice from us. If members don't send us a Shipping Request within 30 days, we can cancel your order, and we can confiscate your deposit for the item. The item will be discarded from our warehouse and you will be exempt to login to our website</p>


<h6 class="policy-subtitle" id="introduction">Member</h6>
<p>Member referes to a person who agreed to Terms of Service, applied via internet for membership to use the service operated by Okurita, has been accepted as a Member.</p>

<p>A Member may not loan, transfer, sell, pawn, or allow a third party to use the said Member's membership eligibility.
A Member is responsible for managing his/her Member ID and password that the Company grants to the Member following Member registration
A Member shall be responsible for loss resulting from inadequate management of his/her Member ID and password, malpractice during use of the said Member ID and password, or use of the said Member ID and password by a third party, and the Company shall not bear any responsibility whatsoever. Use of the Service with a Member's Member ID and password shall be regarded as use by that Member and the Member shall be fully responsible for such use.</p>
<p>If a Member's Member ID or password becomes known to a third party, or if it is suspected that a Member's Member ID or password has been used by a third party, the Member shall immediately report such incident to the Company and shall obey any and all instructions given by the Company. If the Company suffers loss as a result of improper use of a Member's Member ID and password, the Member shall compensate the Company for the said loss.</p>
<p>A Member is obliged to periodically change his/her password, and the Company shall not bear any responsibility whatsoever for loss resulting from a Member's failure to do so.</p>

<p>If a Member dies, the Company shall regard the said Member as having withdrawn membership at the time of death and shall halt use of the Member's member ID and password.</p>

<h6 class="policy-subtitle" id="introduction">Handling of Personal Information</h6>

    Okurita will use a Member's personal information for the following purposes:
    <ol>
        <li>To manage Members.</li>
        <li>To sell or provide the Company's or a third party's products, rights, digital contents, services, or financial products (the "Products Etc.").</li>
        <li>To plan campaigns and prizes and to conduct questionnaires.</li>
        <li>To issue notifications of matters necessary for operating the Service (including notifications by email).</li>
        <li>To advertise, publicize and market the Company's and third parties' Products Etc. (including such notifications by email).</li>
        <li>To distribute the mail magazine.</li>
        <li>To package and dispatch Products Etc.</li>
        <li>To calculate charges and to bill for charges.</li>
        <li>To publish information posted by Members.</li>
        <li>To handle various inquiries and to provide after-service.</li>
        <li>To examine and analyze marketing data and to develop new services.</li>
    </ol>
    <p>Okurita shall appropriately protect personal information in accordance with its privacy policy and shall not provide personal information to any third party in such a manner that individuals can be identified. </p>

    <p>Okurita will at times use cookies when a Member uses the Service.</p>


<h6 class="policy-subtitle" id="introduction">Suspension of Membership Eligibility and Expulsion</h6>

In the following situations, Okurita may temporarily suspend a Member's membership eligibility or expel a Member.
<ol>
    <li>When the Member has improperly used or has allowed a third party to improperly use his/her Member ID or password and the Service.</li>
    <li>When a Member does not pay a charge by the prescribed date.</li>
    <li>When a Member store their items by the prescribed date.</li>
    <li>When a Member enters an incorrect password more than the number of times specified by the Company.</li>
    <li>When a Member does not use the Service within the period specified by the Company.</li>
    <li>When a Member has otherwise violated any of the Terms of Service or separate terms.</li>
    <li>When the Company otherwise deems a Member to be disqualified as a Member.</li>
    <li>When a member requested a cancellation to our company</li>
</ol>

<h6 class="policy-subtitle" id="introduction">Disclaimer</h6>

<p>Okurita cannot guarantee the truthfulness, accuracy, usefulness, reliability, or legality of information about Sellers, the transaction conducted by Sellers, the products sold, the service and the information on the website as well as the personal information of the Sellers, or whether they infringe the rights of third parties.</p>

<p>Okurita will not be responsible for any loss incurred by system interruption, delay, suspension or data loss, or loss caused by illegal data access, as well as any loss caused by other services provided by this website.</p>

<p>If the destination country requires an import license or other permit for import of the merchandise, it is your responsibility to obtain such a license or permit at your own expense.</p>

<p>There may be country specific duties and taxes imposed on your item that are not reflected in our prices. As we, Okurita, are unable to partake in the clearing of items through customs in your country, in the case that your items require additional documentation, or additional tax and duties are required, you are fully responsible for providing such documents and import related payments. For details regarding requirements of importing your items, please contact your local customs office.</p>

<p>We do not provide "under value" Invoice when we send the items to member's designated address for any reason.</p>

<p>The specified shipping method is possible to be changed if oversized item exceeds the limit of shipping method, Or the items are possible to be divided into several packages.</p>

<p>All items purchased through us shall first be sent to our warehouse before being sent to you. We are not able to ship items directly from the seller to your address.</p>

<p>In different countries import restrictions may exist. Please contact your country's relevant department for details before you make a purchase via our service. Please note we are not liable for any loss arising from your failure to comply with these terms. In such a case,we are not able to cancel your order as well.</p>

<p>Items will be packed and handled as to GOODY-JAPAN's regulations. We don't accept the detailed packing instructions for every single item.
Members are recommended to provide the correct Item name, Item picture and Individual item URL, and these 3 descriptions should be identical to each other. We are not responsible in case we bought the incorrect item(s) due to the description shortage or the description discrepancy</p>

<p>The following items can't be sent by EMS: cash, stamps, checks, stocks or other valuable bonds as such as precious metals and valuable items like gems or jewels.
Including the items listed below too, our company doesn't allow customers to have these items shipped by EMS. If the post office, international post or customs detect such shipment, the items will be returned to our warehouse.</p>

<p>You agree to be bound by the terms in the "Disclaimer" of the Website, which is expressly incorporated herein.</p>

A member must not use for the following items:
<ul>
<li>Automotive parts Motorcycle and Car.</li>
<li>Foods or drinks contains Alcohol</li>
<li>Items showing pornografic,CD,DVD,Figure etc</li>
<li>Live animals or plants, dead animals or stuffed animals.</li>
<li>Narcotics</li>
<li>Human bodies or body parts, human remains, ashes of the deceased, or Buddhist mortuary tablets.</li>
<li>Flamable items</li>
<li>Chemical items</li>
<li>Other items that are not permitted to be handled under the carrier's carriage contract.</li>
<li>Other items that the We deems to be unsuitable.</li>
<li>Items whose transportation, export, and import is prohibited or restricted by laws and ordinances of the exporting/importing country including transit countries, the state or local government.</li>
</ul>

<h6 class="policy-subtitle" id="introduction">Refund Policy</h6>

<p>Because Okurita is an intermediary service provider between you and the seller, We do not issue refunds of item prices, commissions or fees, or domestic and international delivery fees for any reason.</p>

 
<h6 class="policy-subtitle" id="introduction">Applicable Law</h6>
<ul>
<li>The Terms & Conditions and the other regulations shall be applicable to the laws of Japan.</li>
<li>If any dispute arises regarding the Terms and the other regulations, Japan Court shall be the agreement jurisdictional court of first instance.</li>
</ul>

                            <h6 class="policy-subtitle" id="introduction">INTRODUCTION</h6>
                            

                            <h6 class="policy-subtitle" id="collection-information">COLLECTION OF YOUR INFORMATION</h6>
                            <p>Okurita Terms of Service</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection