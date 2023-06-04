(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[31961],{941646:(e,t,i)=>{i.d(t,{Z:()=>o});var a=i(883119),n=i(785893);function o(e){const{children:t,display:i,id:o}=e;return(0,n.jsx)(a.xu,{"data-test-id":o,display:i,children:t})}},512176:(e,t,i)=>{i.d(t,{Z:()=>d});var a=i(667294),n=i(883119),o=i(112690),r=i(898781),s=i(967181),l=i(785893);const c={sm:12,md:16,lg:20,xl:24};function d({isVerifiedMerchant:e,size:t,showText:i,showVerifiedIdentity:d,inspirationalBadges:_,inspirationalBadgesColor:u}){const p=(0,r.ZP)(),[h,m]=(0,a.useState)(!1),{dangerousInlineStyle:g,iconColor:f}=(0,s.W)(!!e),v=(0,o.Z)();return(0,l.jsxs)(a.Fragment,{children:[(0,l.jsx)(n.iP,{onTap:()=>{v({component:13534,element:11717,event_type:102}),m(!0)},rounding:"circle",children:(0,l.jsxs)(n.xu,{alignItems:"center",dangerouslySetInlineStyle:g,display:"flex","data-test-id":"verified-badge-icon",children:[(0,l.jsx)(n.JO,{accessibilityLabel:e?p._('Merchant verification badge icon', 'merchantVerification.badge.icon', 'Badge indicating that a merchant or user is verified'):p._('Badge icon', 'merchantVerification.badge.icon', 'Badge indicating that a merchant or user is verified'),icon:"workflow-status-ok",color:f,inline:!0,size:c[t]}),i&&!d&&(0,l.jsx)(n.xu,{marginStart:2,children:(0,l.jsx)(n.xv,{color:"shopping",inline:!0,weight:"bold",children:(0,l.jsx)(n.xu,{dangerouslySetInlineStyle:g,children:p._('Verified merchant', 'creator.header.verifiedMerchant', 'this merchant is a verified merchant')})})})]})}),(e||i&&!d)&&(0,l.jsx)(s.Z,{showModal:h,setShowModal:m,inspirationalBadges:_,inspirationalBadgesColor:u})]})}},967181:(e,t,i)=>{i.d(t,{W:()=>_,Z:()=>u});var a=i(667294),n=i(883119),o=i(752403),r=i(112690),s=i(121151),l=i(898781),c=i(966113),d=i(785893);const _=e=>{const t=e?"shopping":"error";return{iconColor:t,dangerousInlineStyle:{__style:{color:t}}}};function u({inspirationalBadges:e=[],inspirationalBadgesColor:t,showModal:i,setShowModal:u}){const p=(0,l.ZP)(),[h,m]=(0,a.useState)(!0),{dangerousInlineStyle:g,iconColor:f}=_(!0),v=(0,r.Z)();return(0,a.useEffect)((()=>{i&&h&&(m(!1),v({event_type:13,component:13534}))}),[i]),(0,d.jsx)(s.ZP,{accessibilityModalLabel:p._('Verified merchant information', 'creator.verifiedMerchant.accessibilityModalLabel', 'Accessibility label for modal informing about a verified merchant'),isOpen:i,mobileAccessibilityCloseIconLabel:p._('Close', 'Close modal window', 'Close modal'),onDismiss:()=>{v({component:13534,element:11716,event_type:102}),u(!1)},type:"verified_merchant_modal",children:(0,d.jsx)(n.xu,{padding:3,children:(0,d.jsxs)(n.xu,{display:"flex",direction:"column",padding:2,"data-test-id":"verified-badge-modal",children:[(0,d.jsx)(n.xu,{display:"flex",dangerouslySetInlineStyle:g,justifyContent:"center",children:(0,d.jsx)(n.JO,{accessibilityLabel:p._('Merchant verification badge icon', 'creator.verifiedMerchant.modalIcon', 'Badge indicating that a merchant or user is verified'),color:f,icon:"workflow-status-ok",size:24})}),(0,d.jsx)(n.xu,{marginTop:4,children:(0,d.jsx)(n.xv,{color:"shopping",weight:"bold",align:"center",children:(0,d.jsx)(n.xu,{dangerouslySetInlineStyle:g,children:p._('Verified merchant', 'creator.verifiedMerchant.modalHeader', 'this merchant is a verified merchant')})})}),(0,d.jsx)(n.xu,{marginTop:4,marginBottom:4,children:(0,d.jsx)(n.xv,{align:"center",overflow:"normal",children:p._('This retailer meets Pinterest\'s Merchant Guidelines', 'creator.verifiedMerchant.modalText.', 'this merchant is a verified merchant')})}),e.map((e=>(0,d.jsxs)(n.xu,{display:"flex",direction:"column",marginTop:4,children:[(0,d.jsx)(n.kC,{alignItems:"stretch",justifyContent:"center",children:(0,d.jsx)(n.xv,{overflow:"noWrap",size:"100",weight:"bold",children:(0,d.jsx)(n.xu,{display:"inlineBlock",rounding:1,paddingX:2,paddingY:2,dangerouslySetInlineStyle:{__style:(0,o.ym)(t)},"data-test-id":"verified-badge-modal-inspirational-badge",children:e.label})})}),(0,d.jsx)(n.xu,{marginTop:2,children:(0,d.jsx)(n.xv,{align:"center",overflow:"normal",children:e.description})})]},e.id))),(0,d.jsx)(n.xu,{display:"flex",marginTop:8,justifyContent:"center",width:"100%","data-test-id":"verified-badge-modal-learn-more",children:(0,d.jsx)(n.zx,{role:"link",accessibilityLabel:p._('Learn more', 'creator.verifiedMerchant.buttonText', 'learn more about the verified merchant program by visiting help.pinterest.com'),target:"blank",size:"lg",href:c.vB,text:p._('Learn more', 'creator.verifiedMerchant.buttonText', 'learn more about the verified merchant program by visiting help.pinterest.com')})})]})})})}},752403:(e,t,i)=>{i.d(t,{Bu:()=>h,Dm:()=>s,I:()=>f,NG:()=>u,QP:()=>d,S4:()=>c,Xe:()=>_,_f:()=>p,eT:()=>m,hm:()=>g,yQ:()=>l,ym:()=>y});var a=i(642345);const n=Object.freeze({AFRICAN_AMERICAN_OR_BLACK:"african_american_or_black",BLACK_AFRICAN_DIASPORA:"black_african_diaspora",HISPANIC_OR_LATINX:"hispanic_or_latinx",NATIVE_OR_INDIGENOUS:"native_or_indigenous",ABORIGINAL_OR_INDIGENOUS:"aboriginal_or_indigenous",NATIVE_AMERICAN_OR_ALASKA_NATIVE_OR_INDIGENOUS_PEOPLES:"native_american_or_alaska_native_or_indigenous_peoples",ASIAN_OR_PACIFIC_ISLANDERS:"asian_or_pacific_islanders",ASIAN:"asian",LGBTQ:"lgbtq",MIDDLE_EASTERN:"middle_eastern",TURKISH:"turkish",ROMA:"roma",MIDDLE_EASTERN_TURKISH_ROMA:"middle_eastern_turkish_roma",NORTH_AFRICAN:"north_african",MIDDLE_EASTERN_OR_NORTH_AFRICAN:"middle_eastern_or_north_african",NONE:"none"}),o=Object.freeze({PERSON_OF_COLOR:"person_of_color",LGBTQ:"lgbtq",DISABILITY:"disability",WOMAN:"woman",NONE:"none"}),r=Object.freeze({INVESTED_IN_GOOD:"invested_in_good",ECO_FRIENDLY:"eco_friendly",RESPONSIBLY_SOURCED:"responsibly_sourced",INCLUSIVE:"inclusive",PERSONAL_TOUCH:"personal_touch"}),s=[...Object.keys(n).map((e=>n[e])),...Object.keys(o).map((e=>o[e]))],l=[...Object.keys(r).map((e=>r[e]))],c=3,d=["#EFEFEF","#F8E3D1","#F6F1C1","#DDEEAF","#C9F2EE","#DBD5F4","#EFBCEE"],_={business_diversity_labels:[],created_at:"",disapproval_reasons:[],is_inspirational:!1,review_criteria:[],review_labels:[],updated_at:"",inspirational_badge_selection:{badgeColor:d[0],badgeOptOut:[]},is_eligible_for_storefront_badges:!1,badge_details:[],profile_badges:[]},u="https://help.pinterest.com/article/merchant-details",p="https://help.pinterest.com/business/article/add-merchant-details-to-your-profile";function h({verifiedMerchant:e}){var t,i;const a=null==e?void 0:e.isVerifiedMerchant,n=null==e||null===(t=e.inspirational_signal)||void 0===t?void 0:t.is_inspirational,o=null==e||null===(i=e.inspirational_signal)||void 0===i?void 0:i.is_eligible_for_storefront_badges;return Boolean(a&&n&&o)}function m(e){return e.badge_details?e.badge_details.map((e=>e.id)):[]}function g(e){return(null==e?void 0:e.profile_badges)||[]}function f(e,t,i){return t&&i?t.map((e=>i.find((t=>t.id===e.trim())))).filter(Boolean):[]}function v(e){const t=(0,a.oo)(e);if(!t)return"white";const[i,n,o]=t;return(0,a.DW)(i,n,o)<=a.I?"white":"black"}function y(e){const t=e||d[0];return{backgroundColor:t,color:v(t)}}},642345:(e,t,i)=>{i.d(t,{DW:()=>s,I:()=>r,oo:()=>o,vq:()=>n});const a=e=>{const t=e.toString(16);return 1===t.length?"0"+t:t},n=(e,t,i)=>"#"+a(e)+a(t)+a(i),o=e=>{const t=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);return t&&[parseInt(t[1],16),parseInt(t[2],16),parseInt(t[3],16)]},r=.18,s=(e,t,i)=>.2126*(e/255)**2.2+.7151*(t/255)**2.2+.0721*(i/255)**2.2},780679:(e,t,i)=>{i.d(t,{g:()=>r,t:()=>o});var a=i(667294);const n=(0,a.createContext)(null),o=n.Provider,r=()=>(0,a.useContext)(n)},499128:(e,t,i)=>{i.d(t,{UZ:()=>d,Vg:()=>c,ZP:()=>_});var a=i(667294),n=i(883119),o=i(50286),r=i(829407),s=i(785893);const l=2e3,c=200,d=({deviceType:e,hiding:t,visible:i})=>{const a="desktop"===e;let n=0,o=a?"translateY(200px)":"translateY(-200px)",r="opacity 0.1s ease-in-out",s="hidden";return i&&!t&&(n=1,o="translateY(0)",r="all 0.7s cubic-bezier(.19, 1.15, .48, 1)",s="visible"),i&&t&&(o="scale(1.1)",r="opacity transform 0.2s"),{opacity:n,pointerEvents:"auto",position:"relative",marginTop:a?10:0,transform:o,transition:r,visibility:s}};function _({_dangerouslySetThumbnail:e,_dangerouslySetPrimaryAction:t,text:i,primaryAction:_,dismissButton:u,helperLink:p,thumbnail:h,type:m,dataTestId:g,duration:f=l,onHide:v,href:y,onClick:b,openNewPage:A,imageUrl:x}){var P;const S=(0,o.ZP)(),[I,C]=(0,a.useState)(!1),[E,O]=(0,a.useState)(!1),R=(0,a.useRef)(),L=()=>{C(!0),R.current=setTimeout(v,c)},N=()=>{R.current=setTimeout(L,f)},T=()=>{R.current&&clearTimeout(R.current)};let D;(0,r.Z)((()=>(setTimeout((()=>O(!0)),100),N(),T))),x&&(D={image:(0,s.jsx)(n.Ee,{alt:"string"==typeof i?i:`${i[0]} ${i[1]}`,fit:"cover",naturalHeight:1,naturalWidth:1,src:x})});const z=(0,s.jsx)(n.FN,{_dangerouslySetThumbnail:e,_dangerouslySetPrimaryAction:t,primaryAction:_,text:i,thumbnail:null!==(P=D)&&void 0!==P?P:h,type:m,dismissButton:u,helperLink:p}),{marginTop:M,opacity:j,pointerEvents:k,position:w,transform:B,transition:F,visibility:U}=d({deviceType:S,hiding:I,visible:E});return(0,s.jsx)(n.xu,{dangerouslySetInlineStyle:{__style:{transform:B,transition:F,visibility:U,pointerEvents:k}},"data-test-id":null!=g?g:"toast",onMouseEnter:T,onMouseLeave:N,opacity:j,position:w,marginTop:M,display:"flex",children:y?(0,s.jsx)(n.iP,{role:"link",href:y,onTap:({event:e})=>null==b?void 0:b(e),target:A?"blank":null,rounding:"pill",children:z}):z})}},444445:(e,t,i)=>{i.d(t,{$H:()=>r,$q:()=>v,D6:()=>l,KN:()=>y,Lo:()=>n,OS:()=>u,P2:()=>m,ZZ:()=>d,g5:()=>_,jC:()=>s,lX:()=>h,nW:()=>p,oX:()=>g,qG:()=>f,tG:()=>o,yF:()=>a,yc:()=>c});const a=236,n=2*a/3,o=175,r=24,s=4,l=2,c=2,d=14,_=16,u=5,p=12,h=16,m=24,g=16,f=-1,v=(e=!1,t=!1)=>e?t?h:p:m,y=(e,t,i,a,n=d)=>{const o=e+n;return`\n@media (min-width: ${t*o}px) and (max-width: ${(i+1)*o-1}px) {\n  ${a}\n}\n`}},458882:(e,t,i)=>{i.d(t,{l:()=>o,r:()=>r});var a=i(667294);const n=(0,a.createContext)(null),o=()=>(0,a.useContext)(n),r=n.Provider},667679:(e,t,i)=>{i.d(t,{Z:()=>o});var a=i(780679),n=i(458882);const o=()=>{const e=(0,a.g)(),t=(0,n.l)();return i=>{const{mobileOptions:a,desktopOptions:n,reason:o,attributionLabel:r}=i;e?e.showDesktopSignupModal({signupFlow:"login"===(null==n?void 0:n.modalType)?{type:"login"}:{type:"signup"},reason:o,attributionLabel:r,...null==n?void 0:n.modalOptions}):t&&t.showMobileSignupModal({reason:o,attributionLabel:r,headingType:null==a?void 0:a.headingType})}}},62409:(e,t,i)=>{i.d(t,{AH:()=>l,Bk:()=>o,CK:()=>s,Xe:()=>n,kb:()=>r,wS:()=>a});const a=(e,t,i,a)=>{let n;return n=t||(e?e.official_user:i||a),n};function n({hasLinkDomain:e,hasNativeCreator:t,hasOriginPinner:i,pinDomain:a,sourceUserUsername:n,sourceUserFullName:o}){return!t&&(e||i)&&n?{pinCreditLink:`/${n}/`,pinCredit:o}:{pinCreditLink:void 0,pinCredit:!t&&e?a:""}}const o=({i18n:e,isLego:t,hasLinkDomain:i,hasRichMetadataArticle:a,hasRichMetadataTutorial:n,hasRichMetadataRecipeCategorizedIngredients:o,hasRichMetadataProductOfferSummary:r,hasRichSummaryProductOfferSummary:s,richMetadataRecipeFromAggregatedData:l,richMetadataProductName:c,richSummaryProductName:d})=>{const _=o;let u;c&&r&&(u=!0);const p=a,h=n;let m=t?e._('From ', 'Closeup pin annotation', 'Closeup pin annotation'):e._('Saved from ', 'Closeup pin annotation', 'Closeup pin annotation');return!i||l?m=e._('Saved by ', 'Closeup pin annotation', 'Closeup pin annotation'):u?m=e._('Product sold by ', 'pin annotation', 'pin annotation'):h?(t&&(m=e._('From ', 'pin annotation', 'pin annotation')),m=e._('Saved from ', 'pin annotation', 'pin annotation')):_?m=e._('Recipe from ', 'pin annotation', 'pin annotation'):p&&(m=e._('Article from ', 'pin annotation', 'pin annotation')),!r&&d&&s&&(m=e._('Product sold by ', 'pin annotation', 'pin annotation')),m},r=({hasLinkDomain:e,richMetadata:t,richSummary:i})=>{var a;return e&&(null==t||null===(a=t.recipe)||void 0===a||!a.fromAggregatedData)&&null!=t&&t.products&&t.products[0]&&t.products[0].name&&t.products[0].offerSummary?t.products[0].offerSummary:null!=i&&i.products&&i.products[0]&&i.products[0].name&&i.products[0].offerSummary?i.products[0].offerSummary:void 0},s=({hasRichMetadata:e,hasRichMetadataProducts:t,hasRichMetadataArticle:i,hasRichMetadataRecipe:a})=>e?t?144:i?141:a?145:139:140,l=e=>!!e&&!e.startsWith("https://i.pinimg.com")},927383:(e,t,i)=>{i.d(t,{Z:()=>s});var a=i(898781),n=i(50286),o=i(987318),r=i(945698);const s=()=>{const e=(0,a.ZP)(),t=(0,n.HG)(),{viewer:i,loginForMore:s,limitedLoginModalSubheader:l,limitedLoginModalNextLocation:c}=(0,o.H)();return"LIMITED_LOGIN"===i.type?({modalHeader:i,nextLocation:a})=>n=>{let o=null;n&&(n.nativeEvent&&n.nativeEvent instanceof Event?o=n:n.event&&(o=n.event)),o&&(o.preventDefault&&o.preventDefault(),o.stopPropagation&&o.stopPropagation()),null==s||s.setVisible(!0),null==l||l.setText(i||(t?(0,r.hr)(e):(0,r.Wh)(e))),a&&(null==c||c.setRoute(a))}:({fn:e})=>e}},90326:(e,t,i)=>{i.d(t,{Ge:()=>c,JS:()=>r,OF:()=>f,P_:()=>s,Q_:()=>u,b8:()=>p,eR:()=>g,h2:()=>d,h6:()=>_});var a=i(214494),n=i(186656),o=i(735422);function r(e){return{type:"UPDATE_USER_PIN_COUNT",payload:e}}const s=(e,t)=>({type:"USER_FOLLOW",payload:{id:e,value:t}}),l=(e,t)=>({type:"USER_BLOCK",payload:{id:e,value:t}}),c=({id:e,orbacSubjectId:t,blockSource:i,blockContext:n})=>o=>(o(l(e,!0)),a.Z.create("UserBlockResource",{blocked_user_id:e,orbac_subject_id:t,block_source:i,block_context:n}).callCreate().catch((()=>o(l(e,!1))))),d=e=>t=>(t(l(e,!1)),a.Z.create("UserBlockResource",{blocked_user_id:e}).callDelete().catch((()=>t(l(e,!0)))));function _(e){return{type:"UPDATE_USER_SCHEDULED_PIN_COUNT",payload:e}}const u=(e,t)=>()=>a.Z.create("UserStateResource",{state:e,value:t}).callCreate(),p=(e,t,i)=>(a,r)=>{(0,n.Z)({url:"/v3/users/me/",method:"POST"}).then((()=>{i({event_type:48,object_id_str:r().session.userId}),e(),(0,o.Dm)()}),t)};const h=async(e,t,i)=>{var n;const o=await a.Z.create("VIPResource",{upload_ids:[e]}).callGet();if(null!==(n=o.resource_response)&&void 0!==n&&n.data[e]){const a=o.resource_response.data[e],{status:n,signature:r}=a;if("processing"===n||"registered"===n)setTimeout((async()=>{h(e,t,i)}),5e3);else if("succeeded"===n){const e=((e,t="150x150")=>e&&`https://i.pinimg.com/${t}/${e.substring(0,2)}/${e.substring(2,4)}/${e.substring(4,6)}/${e}.jpg`||"")(r);t(e)}else i()}else i()},m=e=>new Promise(((t,i)=>{var n,o,r,s,l;n=e,o="pinimage",r=()=>{},s=e=>{t(e)},l=e=>{i(e)},(new FormData).append("img",n),a.Z.create("VIPResource",{type:o}).callCreate().then((e=>{var t;if(null!==(t=e.resource_response)&&void 0!==t&&t.data){const{upload_id:t,upload_url:i,upload_parameters:a}=e.resource_response.data,o=new XMLHttpRequest;o.open("POST",i,!0),o.onload=()=>{var e;(e=o.status)>=200&&e<400?(r(100),h(t,s,l)):l()},o.upload.onprogress=e=>{const t=Math.round(100*e.loaded/e.total);r(t)};const c=new FormData;for(const e in a)c.append(e,a[e]);c.append("file",n),o.send(c)}}),(()=>{l()}))})),g=e=>new Promise(((t,i)=>{"string"==typeof e?e.startsWith("data")&&m(function(e,t=512){const i=e.split(";"),a=i[0].split(":")[1],n=i[1].split(",")[1],o=atob(n),r=[];for(let s=0;s<o.length;s+=t){const e=o.slice(s,s+t),i=new Array(e.length);for(let t=0;t<e.length;t+=1)i[t]=e.charCodeAt(t);const a=new Uint8Array(i);r.push(a)}return new Blob(r,{type:a})}(e)).then((e=>t(e))):i("Invalid Image")})),f=e=>()=>(0,n.Z)({url:"/v3/register/exists/",data:{email:e}})}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/31961-fe9bb62563407364.mjs.map