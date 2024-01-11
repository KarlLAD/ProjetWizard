export const isValidFrenchPhoneNumber = (phonenumber) => {
  const metropolitanFranceReg = new RegExp(
    /^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/
  );
  const overseasFranceReg = new RegExp(
    /^(?:(?:\+|00|0)((262|692)|(263|693)|508|(5|6)90|(5|6)94|(5|6|7)96|681|687|689))(?:[\s.-]*\d{2}){3,4}$/
  );
  // src: https://en.wikipedia.org/wiki/Telephone_numbers_in_France
  // 262, 263 = La Réunion, Mayotte and IO territories ; 508 = Saint-Pierre-et-Miquelon
  // 590 = Guadeloupe, Saint-Martin et Saint-Barthélemy ; 594 = French Guiana (Guyane) ; 596 = Martinique
  // 681 = Wallis-et-Futuna ; 687 = Nouvelle-Calédonie
  // 689 = French Polynesia

  console.log("metro : ", metropolitanFranceReg);
  console.log("overseas :", overseasFranceReg);
  return (
    !(phonenumber.match(metropolitanFranceReg) === null) ||
    !(phonenumber.match(overseasFranceReg) === null)
  );
};
